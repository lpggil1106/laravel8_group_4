<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = ['phone','address','payment','shipment','order_no','name','email'];

    const ISPAID = ['未付款','已付款'];
    const PAYMENT = ['信用卡付款','網路ATM','超商代碼'];
    const SHIPMENT = ['黑貓宅配','超商店到店'];

    public function orderProducts(){
        return $this->hasmany(OrderProducts::class,'product_id','id');
    }

    public function user(){
        return $this->belongsTo(OrderProducts::class,'product_id','id');
    }
}
