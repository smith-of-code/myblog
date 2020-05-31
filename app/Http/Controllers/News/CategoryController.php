<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function categories()
    {
        return view('news.categories')->with('categories', Category::all());
    }

    public function category(Category $category)
    {

        return view('news.category')
            ->with('category', $category)
            ->with('news', News::query()->where('category_id', $category->id)->get());
    }
}
