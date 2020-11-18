<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\User;
use App\Models\Campaign;
use App\Models\Inventory;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        return "Home";
    }

    public function create($id)
    {
        $campaign = Campaign::find($id);
        return view('stock.create', compact('campaign'));
    }

    public function store(Request $request, $user_id, $campaign_id, $inventory_id)
    {
        $user = User::find($user_id);
        $campaign = Campaign::find($campaign_id);
        $inventory = Inventory::find($inventory_id);

        Stock::create([
            'user_id' => $user->id,
            'campaign_id' => $campaign->id,
            'type' => $request->type,
            'inventory_id' => $inventory->id
        ]);

        return redirect()->route('campaign.details', [$campaign->id]);
    }

    public function refil(Request $request)
    {
        $user = Auth()->user()->id;
        $product = $request->get('product');
        $quantity = $request->get('quantity');
        $remarks = $request->get('remarks');
        $type = $request->get('type');

        $inventory = Inventory::find($product);

        Stock::create([
            'user_id' => $user,
            'campaign_id' => $inventory->campaign_id,
            'type' => $type,
            'quantity' => $quantity,
            'inventory_id' => $product,
            'remarks' => $remarks
        ]);

        return redirect()->route('campaign.details', [$inventory->campaign_id]);
    }

    public function update(Request $request, $id)
    {
        $item = Stock::find($id);
        $item->closing = $request->input('closing');
        $item->remarks = $request->input('remarks');

        $item->save();

        return redirect()->route('campaign.details', [$item->campaign_id]);
    }
}
