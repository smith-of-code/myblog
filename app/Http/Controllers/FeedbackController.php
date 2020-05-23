<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('POST')){
            Feedback::writeFeedback($request->except('_token'));
            return view('feedback')->with('send', true);
        }
        return view('feedback');
    }
}
