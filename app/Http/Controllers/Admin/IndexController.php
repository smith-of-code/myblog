<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index')->with('isAdmin', true);

    }

    public function newsAdd(Request $request){
        $categories = new Category();

        if ($request->isMethod('post')){
            $news = new News();
            $news->NewsAdd($request->except('_token'));
            return view('admin.addNews')
                ->with('isAdmin', true)
                ->with('categories', $categories->getCategory())
                ->with('newsAdd', true);

        }

        return view('admin.addNews')
            ->with('isAdmin', true)
            ->with('categories', $categories->getCategory() );
    }


    public function addCategory()
    {


    }
}
