<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $fillable = ['title','date','content','image_url','new_categories_id'];

    public function newsCategories(){
        return $this->belongsTo(NewsCategories::class,'new_categories_id','id');
    }
}
