<?php

namespace App\Http\Controllers\News;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Object_;

class NewsController extends Controller
{

    public function newsAll()
    {
        return view('news.all')->with('news', News::all());
    }

    public function newsOne(News $news)
    {
        return view('news.one')->with('news', $news);
    }






}
