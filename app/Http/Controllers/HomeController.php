<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('layouts.main')->with('feedbackList', Feedback::all());

    }
}
