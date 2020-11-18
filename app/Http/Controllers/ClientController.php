<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index($client_name, $id)
    {
        $campaign = Campaign::where('id', $id)->with('stock')->get();
        $campaign_team = Campaign::where('id', $id)->with('users')->get();

        $campaign_team = Campaign::where('id', $id)->with('users')->get();



        return view('clients.details', compact('campaign', 'campaign_team'));
    }
}
