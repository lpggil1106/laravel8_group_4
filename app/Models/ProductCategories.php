<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    use HasFactory;
    protected $table = 'product_categories';
    protected $fillable = ['service_id','name'];

    public function products(){
        return $this->hasMany(Products::class,'product_categories_id','id');
    }

    public function serviceCategories(){
        return $this->belongsTo(ServiceCategories::class,'service_id','id');
    }
}
