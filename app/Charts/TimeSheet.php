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
        $timesheets = TimeSheetModel::where('campaign_id', $campaign->id)->get();

        $times = [];
        $labels = [];
        $timelines = [];
        foreach ($timesheets as $item) {
            array_push($times ,$item->id);
            array_push($labels, $item->type);
            array($timelines, $item->time);
        }
        return Chartisan::build()
            ->labels($labels)
            ->dataset('Users', $times);
    }
}
