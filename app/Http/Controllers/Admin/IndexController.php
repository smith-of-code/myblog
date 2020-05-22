<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index')->with('isAdmin', true);

    }

    public function newsAdd(Request $request){

        if ($request->isMethod('post')){

        }
        return view('admin.addNews')->with('isAdmin', true);
    }


    public function addCategory()
    {


    }
}
