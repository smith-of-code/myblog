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

    public function addNews()
    {


    }
    public function addCategory()
    {


    }
}
