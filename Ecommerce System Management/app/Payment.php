<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['card_number', 'card_three_digits', 'expiration_month', 'expiration_year', 'country', 'cart_id', 'user_id'];
    
    public static $validationRules = array(
        'card_number' => 'required',    
        'card_three_digits' => 'required',    
        'expiration_month' => 'required',    
        'expiration_year' => 'required',    
        'country' => 'required',    
        'cart_id' => 'required',    
        'user_id' => 'required',    
    );


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cart_id');
    }
}
