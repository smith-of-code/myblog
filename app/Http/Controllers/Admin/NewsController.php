<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{

    public function list ()
    {
        return view('admin.newsList')->with('news', News::all());

    }


    public function create (Request $request)
    {
        $news = new News();
        if ($request->isMethod('post')) {

            $this->validate($request, News::rules(),[],News::atributeNames());

            if ($request->file('image')) {
                $path = $request->file('image')->store('public/images/news');
                $url = Storage::url($path);
                $news->fill(['image'=>$url]);
            }

            $news->fill($request->except('image'));
            $news->save();

            return view('admin.addNews')
                ->with('categories', Category::all())
                ->with('success', 'Новость успешно создана!');
        }


        return view('admin.addNews')->with('categories', Category::all());

    }

    public function edit (Request $request, News $news)
    {
        return view('admin.addNews')
            ->with('news', $news)
            ->with('categories', Category::all());

    }

    public function update (Request $request, News $news)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, News::rules(),[],News::atributeNames());
            if ($request->file('image')) {
                $path = $request->file('image')->store('public/images/news');
                $url = Storage::url($path);
                $news->fill(['image'=>$url]);
            }

            $news->fill($request->except('image'));
            $news->save();

            return view('admin.addNews')
                ->with('categories', Category::all())
                ->with('success', 'Новость успешно обновлена!');
        }

    }

    public function destroy (Request $request, News $news)
    {
        $news->delete();
        return redirect()->route('admin.news.list');

    }

}
