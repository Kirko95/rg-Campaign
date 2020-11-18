<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Campaign;

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

        $labels = [];
        $product_type = [];
        foreach ($inventories as $item) {
            array_push($labels, $item->name);
            array_push($product_type, $item->id);
        }
        return Chartisan::build()
            ->labels($labels)
            ->dataset('product_type', $product_type);
    }
}
