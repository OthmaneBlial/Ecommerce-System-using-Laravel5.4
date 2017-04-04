<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description','price', 'stock','subcategory_id', 'company_id'];
    
    public static $validationRules = array(
        'name' => 'required|string',
        'description' => 'required',
        'price' => 'required',
        'stock' => 'required',
        'subcategory_id' => 'required',
        'company_id' => 'required',
        
    );


    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }

    public function productimage()
    {
        return $this->hasOne(Productimage::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }


    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }
    
    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }  


    public function setPrice($price)
    {
        $this->price = $price;

    }

    public function setIsFeatured($is_featured)
    {
        $this->is_featured = $is_featured;

    }

    public function scopeActive($query)
    {
        return $query->where('status', 1)
                     ->where('stock', '>', 0);
    }

    public function scopeInActive($query)
    {
        return $query->where('status', 0);
                     
    }

    public function scopeByFilter($query, $keyword)
    {
        return $query->where("name", "LIKE","%$keyword%")
            ->orWhere("description", "LIKE","%$keyword%");
    }

    public function scopeByAttr($query, $filter, $attr = 'name')
    {
        return $query->where($attr, 'like', '%'.$filter.'%');

    }

    public function IsStockAvailable($query)
    {
        return $query->where('stock', '>', 0);
                     
    }

    public function IsStockEmpty($query)
    {
        return $query->where('stock', '=', 0);
                     
    }

    public function ScopeIsStockLow($query)
    {
        return $query->where('stock', '>', 0)
                     ->where('stock', '<', 10);
                     
    }

    public function ScopeIsFeatured($query)
    {
        return $query->where('is_featured', 1);
    }




    public function ScopeByPrice($query, $price_from, $price_to)
    {

        return $query->where('price', '>', $price_from)
                     ->where('price', '<', $price_to);
                     
    }





}
