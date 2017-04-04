<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class Orderedproduct extends Model
{
    protected $fillable = ['quantity', 'product_id', 'user_id', 'cart_id'];
    
    public static $validationRules = array(
        'quantity' => 'required',
        'product_id' => 'required',
        'user_id' => 'required',
        'cart_id' => 'required',      
    );


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cart_id');
    }


    public function getCreatedAtAttribute($date)
    {
        return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d  H:i');
    }

    public function getUpdatedAtAttribute($date)
    {
        return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
    }

}
