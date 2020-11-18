<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ledger extends Model
{
    protected $fillable = [
        'user_id', 'campaign_id', 'clockin', 'clockout'
    ];

    public function campaign()
    {
        return $this->belongsTo(App::Campaign);
    }
}
