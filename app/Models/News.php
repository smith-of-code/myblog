<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['title', 'desc', 'content', 'image', 'is_private', 'published', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id')->first();
    }
}
