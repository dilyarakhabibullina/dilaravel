<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['_token', 'id', 'categories_id', 'title', 'inform'];
public function category(){
        return $this->belongsTo(Category::class, 'category_id')->first();
}
   
    }
