<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = ['name', 'is_private'];

    public function news()
    {
        return $this->hasMany(News::class, 'category_id');
    }
}
