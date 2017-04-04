<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description'];
    
    public static $validationRules = array(
        'name' => 'required',    
        'description' => 'required',    
    );


    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

}
