<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    
    protected $guarded = [];



    public function orderedproducts()
    {
        return $this->hasMany(Orderedproduct::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
