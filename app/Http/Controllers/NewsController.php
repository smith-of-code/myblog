<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        return view('news')->with('news', News::getNews());
    }

    public function news($id)
    {
        return view('newsOne')->with('news', News::getNewsId($id));
    }

    public function categoryAll()
    {
        return view('category')->with('category', Category::getCategory());
    }

    public function categoryNews($id)
    {
        return view('categoryNews')->with('news', News::getNewsCategory($id))->with('category',
            Category::getCategoryOne($id));
    }


}
