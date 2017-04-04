<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = ['name'];
    
    public static $validationRules = array(
        'name' => 'required',    
    );


    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
