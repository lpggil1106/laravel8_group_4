<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = ['user_id','phone','address','payment','shipment'];

    public function orderProducts(){
        return $this->hasmany(OrdersProducts::class,'product_id','id');
    }

    public function user(){
        return $this->belongsTo(OrdersProducts::class,'product_id','id');
    }
}
