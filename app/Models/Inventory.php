<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'campaign_id', 'name', 'type', 'sku'
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
