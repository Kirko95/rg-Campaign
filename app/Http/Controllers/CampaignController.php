<?php

namespace App\Http\Controllers;

use Auth;
use \Carbon\Carbon;
use App\Models\User;
use App\Models\Team;
use App\Models\Stock;
use App\Models\Ledger;
use App\Models\Campaign;
use App\Models\Inventory;
use App\Models\Timesheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::with('company')->with('teams')->get();
        return view('campaigns.index', compact('campaigns'));
    }

    public function create()
    {
        $teams = User::whereHas(
            'role', function($q) {
                $q->where('role', 'team');
            }
        )->get();

        $clients = User::whereHas(
            'role', function($q) {
                $q->where('role', 'client');
            }
        )->get();

        return view('campaigns.create', compact('clients', 'teams'));
    }

    public function store(Request $request)
    {
        $name = $request->get('name');
        $company = $request->get('company');
        $start = $request->get('start');
        $end = $request->get('end');
        $team = $request->input('team');
        $description = $request->input('description');

        // Inventory
        $product = $request->get('product');
        $inventory_type = $request->get('inventory_type');
        $sku = $request->get('sku');

        $campaign = Campaign::create([
            'name' => $name,
            'company_id' => $company,
            'start' => $start,
            'end' => $end,
            'description' => $description
        ]);

        for ($i=0; $i < count($product); $i++) {
            $inventory = Inventory::create([
                'campaign_id' => $campaign->id,
                'name' => $product[$i],
                'type' => $inventory_type[$i],
                'sku' => $sku[$i]
            ]);
        }

        for ($i=0; $i < count($team); $i++) {
            Team::create([
                'campaign_id' => $campaign->id,
                'user_id' => $team[$i]
            ]);
        }

        return redirect('/campaigns');
    }

    public function show($id)
    {
        $campaign = Campaign::where('id', $id)->with('users')->first();
        return view('campaigns.show', compact('campaign'));
    }

    public function details($id)
    {
        $inventories = Inventory::where('campaign_id', $id)->get();
        $campaign = Campaign::findOrFail($id);
        $timesheet = Timesheet::where('campaign_id', $id)
            ->where('user_id', Auth()->user()->id)
            ->whereDate('time', '=', date('Y-m-d'))
            ->get();
        $checktimer = Timesheet::where('campaign_id', $id)
            ->where('user_id', Auth()->user()->id)
            ->whereDate('time', '=', date('Y-m-d'))
            ->orderBy('time', 'DESC')
            ->first();

        $stocks = Stock::where('user_id', Auth()->user()->id)->where('campaign_id', $campaign->id)->with('inventory')->get();

        return view('users.details', compact('inventories', 'timesheet', 'checktimer', 'campaign', 'stocks'));
    }

    public function update($id)
    {
        $stock = Stock::where('id', $id)->first();
        return view('stock.update', compact('stock'));
    }
}
