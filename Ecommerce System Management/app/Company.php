<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'description'];
    
    public static $validationRules = array(
        'name' => 'required',    
        'description' => 'required',    
    );


    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
