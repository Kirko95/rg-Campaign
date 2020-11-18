<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 'email', 'phone', 'passport', 'gender', 'age', 'town', 'role', 'is_admin', 'password',
    ];

    protected $enums = [
        'gender' => User::class.':nullable',
    ];

    public function image()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function role()
    {
        return $this->hasMany(Role::class);
    }

    public function timesheets()
    {
        return $this->hasMany(Timesheet::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
