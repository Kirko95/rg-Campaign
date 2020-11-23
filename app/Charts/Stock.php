<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Campaign;
use App\Models\Stock as StockModel;

class Stock extends BaseChart
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
        $inventories = Inventory::where('campaign_id', $campaign->id)->get();
        $stocks = StockModel::where('campaign_id', $campaign->id)
            ->with('inventory')
            ->whereDate('created_at', '=', date('Y-m-d'))
            ->get();

        $data = [];
        $labels = [];
        foreach ($stocks as $item) {
            array_push($labels, $item->inventory->type);
            array_push($labels, $item->inventory->quantity);
            array_push($data, $item->quantity);
        }
        return Chartisan::build()
            ->labels($labels)
            ->dataset('product_type', $data);
    }
}
