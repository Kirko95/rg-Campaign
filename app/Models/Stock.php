<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'user_id', 'campaign_id', 'inventory_id', 'type', 'quantity', 'remarks'
    ];

    public function campaign()
    {
        return $this->belongsTo(campaign::class);
    }

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
