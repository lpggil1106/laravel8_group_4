<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProducts extends Model
{
    use HasFactory;
    protected $table = 'order_products';
    protected $fillable = ['order_id','product_id','quantity','image_url','price','name'];

    public function orders(){
        return $this->belongsTo(Orders::class,'product_id','id');
    }

    public function products(){
        return $this->belongsTo(Products::class,'product_id','id');
    }
}
