<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['product_categories_id','name','price','image_url','content','course_start_date','course_end_date','block1','block2','block3'];

    public function productCategories(){
        return $this->belongsTo(ProductCategories::class,'product_categories_id','id');
    }

    public function productImages(){
        return $this->hasMany(productImages::class,'product_id','id');
    }

    public function orderProducts(){
        return $this->hasMany(OrderProducts::class,'product_id','id');
    }
}
