<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['email', 'comment', 'user_id', 'product_id'];
    
    public static $validationRules = array(
        'email' => 'required',    
        'comment' => 'required',    
        'user_id' => 'required',    
        'product_id' => 'required',    
    );


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
