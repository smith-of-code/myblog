<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Object_;

class NewsController extends Controller
{

    public function index()
    {
        $news = new News();
        return view('news')->with('news', $news->getNews());
    }

    public function news($id)
    {
        $news = new News();
        return view('newsOne')->with('news', $news->getNewsId($id));
    }

    public function categoryAll()
    {
        $category = new Category();
        return view('category')->with('category', $category->getCategory());
    }

    public function categoryNews($id)
    {
        $category = new Category();
        $news = new News();
        return view('categoryNews')->with('news', $news->getNewsCategory($id))->with('category',
            $category->getCategoryOne($id));
    }


}
