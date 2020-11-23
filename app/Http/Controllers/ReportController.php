<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\User;
use App\Models\Role;
use App\Models\Team;
use App\Models\Stock;
use App\Models\Campaign;
use App\Models\TimeSheet;
use App\Models\Inventory;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index($id)
    {
        $campaign = Campaign::findOrFail($id);
        $inventories = Stock::where('campaign_id', $campaign->id)->with('inventory')->orderBy('created_at')->get();
        $timesheet = TimeSheet::where('campaign_id', $campaign->id)->with('user')->orderBy('created_at')->get();
        $team = Team::where('campaign_id', $campaign->id)->with('user')->orderBy('created_at')->get();

        $data = compact('campaign', 'inventories', 'timesheet', 'team');

        $pdf = PDF::setOptions(['isHtml5ParserEnabled' =>true, 'isRamoteEnabled' => true]);
        $pdf = PDF::loadView('reports.details', $data);


        return $pdf->download('report.pdf');
    
        return view('reports.details', compact('campaign', 'inventories', 'timesheet', 'team'));
    }
}
