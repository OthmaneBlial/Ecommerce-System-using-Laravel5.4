<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productimage extends Model
{
    protected $fillable = ['name', 'product_id'];
    
    public static $validationRules = array(
        'name' => 'required',    
        'product_id' => 'required',    
    );


    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
