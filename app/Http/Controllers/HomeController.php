<?php

namespace App\Http\Controllers;

use Auth;
use \Carbon\Carbon;
use App\Models\User;
use App\Models\Role;
use App\Models\Team;
use App\Models\Stock;
use App\Models\Campaign;
use App\Models\TimeSheet;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Chartisan\PHP\Chartisan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function team()
    {
        $team = Team::where('user_id', Auth()->user()->id)
            ->with(['campaign' => function($q) {
                $q->where('status', true);
                $q->with('company');
            }])
            ->first();

        $timesheet = Timesheet::where('user_id', Auth()->user()->id)
            ->where('campaign_id', $team->campaign_id)
            ->whereDate('time', '=', date('y-m-d'))
            ->orderBy('time', 'DESC')
            ->first();
        // Check if user is clocked in today

        return view('users.index', compact('team', 'timesheet'));
    }

    public function client()
    {
        $user = User::where('id', Auth()->user()->id)->with('role')->first();
        
        if($user->role[0]->role == 'client')
        {
            $campaign = Campaign::where('company_id', Auth()->user()->id)->where('status', true)->first();
            $teams = Team::where('campaign_id', $campaign->id)->count();
            $stock = Inventory::where('campaign_id', $campaign->id)->where('type', 'stock')->count();
            $merchandise = Inventory::where('campaign_id', $campaign->id)->where('type', 'merchandise')->count();
            $sales = Stock::where('campaign_id', $campaign->id)->where('type', 'sales')->count();
            $products = Inventory::where('campaign_id', $campaign->id)->count();
            // This will be a collection of all sales recorded form the stock records
            $stock_sales = Stock::where('campaign_id', $campaign->id)->where('type', 'sales')->get();
            $team_logger = TimeSheet::where('campaign_id', $campaign->id)->with('user')->whereDate('created_at', '=', date('Y-m-d'))->limit(5)->get();
            $engagement = Stock::where('campaign_id', $campaign->id)->with('inventory')->whereDate('created_at', '=', date('Y-m-d'))->limit(5)->get();

            return view('clients.index', compact('campaign', 'teams', 'stock', 'merchandise', 'sales', 'products', 'engagement', 'team_logger'));
        }else {
            return redirect('/');
        }
    }
}
