<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->hasOne('App\Role');
    }

    public function accounts()
    {
        return $this->hasMany('App\Account');
    }

    public function account_type()
    {
        return $this->hasOne('App\AccountType');
    }

    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    public function transactions()
    {
        return $this->hasMany('App\Transaction');
    }

    public function balance()
    {
        return $this->hasOne('App\Balance');
    }
}
