<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Models\TimeSheet as TimeSheetModel;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Team;
use App\Models\Campaign;

class TimeSheet extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $user = Auth()->user()->id;
        $campaign = Campaign::where('company_id', $user)->first();
        $timesheets = TimeSheetModel::where('campaign_id', $campaign->id)
            ->with('user')
            ->whereDate('created_at', '=', date('Y-m-d'))
            ->get();

        $data = [];
        $labels = [];
        foreach ($timesheets as $item) {
            array_push($data, $item->user->id);
            array_push($labels, $item->type);
        }
        return Chartisan::build()
            ->labels($labels)
            ->dataset('users_timesheet', $data);
    }
}
