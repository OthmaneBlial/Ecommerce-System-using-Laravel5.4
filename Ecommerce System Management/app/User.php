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

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }    

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }   

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function orderedproducts()
    {
        return $this->hasMany(Orderedproduct::class);
    }

    public function hasRole($role = null) {

        if ($role) {
            return $this->role == $role;
        }

        return $this->role;
    }
}
