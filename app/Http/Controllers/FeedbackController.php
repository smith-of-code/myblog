<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function create (Request $request)
    {
        $news = new Feedback();
        if ($request->isMethod('post')) {

            $this->validate($request, Feedback::rules(),[],Feedback::atributeNames());

            $news->fill($request->all())->save();

            return view('layouts.main')
                ->with('success', 'Отзыв отправлен');
        }


        return view('feedback');

    }
    public function list()
    {
        return view('feedbackList')->with('feedbackList', Feedback::all());
    }
}
