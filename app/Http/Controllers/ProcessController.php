<?php

namespace App\Http\Controllers;

use \Carbon\Carbon;
use App\Models\User;
use App\Models\Ledger;
use App\Models\Campaign;
use App\Models\Timesheet;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function clockIn(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'time' => 'required',
            'campaign' => 'required'
        ]);

        // $request->ip();
        $user = User::findOrFail(Auth()->user()->id);
        $campaign = Campaign::findOrFail($request->campaign);

        $timesheet = Timesheet::create([
            'user_id' => $user->id,
            'campaign_id' => $campaign->id,
            'time' => $request->time,
            'type' => $request->type
        ]);

        // return view('stock.record', compact('campaign', 'timesheet'));

        return redirect()->route('campaign.details', [$campaign->id]);
    }

    public function clockOut(Request $request, $user_id, $campaign_id, $ledger_id)
    {
        $user = User::find($user_id);
        $campaign = Campaign::find($campaign_id);
        $ledger = Ledger::find($ledger_id);

        $ledger->clockout = Carbon::now();

        $ledger->save();

        return redirect()->route('campaign.details', [$campaign->id]);
    }
}
