<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $guarded= [];

    protected $fillable = [
        'name', 'company_id', 'description', 'start', 'end'
    ];

    public function company()
    {
        return $this->belongsTo(User::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function stock()
    {
        return $this->hasMany(Stock::class);
    }

    public function ledgers(){
        return $this->hasMany(Ledger::class);
    }

    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }

    public function timesheets()
    {
        return $this->hasMany(Timesheet::class);
    }
}
