<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategories extends Model
{
    use HasFactory;
    protected $table = 'service_categories';
    protected $fillable = ['name'];

    public function productCategories(){
        return $this->hasmany(ProductCategories::class,'service_id','id');
    }
}
