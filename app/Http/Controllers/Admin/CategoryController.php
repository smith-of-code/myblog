<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function list ()
    {
        return view('admin.categoryList')->with('categories', Category::all());

    }


    public function create (Request $request)
    {
        $category = new Category();

        if ($request->isMethod('post')) {

            $this->validate($request, Category::rules(),[],Category::atributeNames());

            if ($request->get('is_private') == 'on'){
                $category->fill(['is_private' => true]);
            }
            if ($request->get('slug')){
                $category->fill(['slug' => \Str::slug($request->slug)]);
            }else{
                $category->fill(['slug' => \Str::slug($request->name)]);
            }
            $category->fill($request->except('is_private','slug'))->save();

            return view('admin.addCategory')
                ->with('success', 'категория успешно создана!');
        }


        return view('admin.addCategory');

    }

    public function edit (Request $request, Category $category)
    {
        return view('admin.addCategory')
            ->with('category', $category);

    }

    public function update (Request $request, Category $category)
    {
        if ($request->isMethod('post')) {

            $this->validate($request, Category::rules(true),[],Category::atributeNames());


            if ($request->get('is_private') == 'on'){
                $category->fill(['is_private' => true]);
            }
            if ($request->get('slug')){
                $category->fill(['slug' => \Str::slug($request->slug)]);
            }else{
                $category->fill(['slug' => \Str::slug($request->name)]);
            }
            $category->fill($request->except('is_private','slug'))->update();

            return view('admin.addCategory')
                ->with('success', 'категория успешно обновлена');
        }
        return redirect()->back();
    }

    public function destroy (Request $request, Category $category)
    {
        News::where('category_id', $category->id)->delete();
        $category->delete();
        return redirect()->route('admin.category.list');

    }
}
