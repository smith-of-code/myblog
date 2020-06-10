<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\News;
use App\Models\ParsResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserController extends Controller
{
    public function index()
    {
        $resource = ParsResource::all();

        foreach ($resource as $item){
            $xml = XmlParser::load($item->link);
            $data = $xml->parse([
                'name' => [
                    'uses' => 'channel.title'
                ],
                'description'=>[
                    'uses' => 'channel.description'
                ],
                'image'=>[
                    'uses' => 'channel.image.url'
                ],
                'news'=> [
                    'uses' => 'channel.item[title,link,description,pubDate]'
                ],
            ]);



            if (!Category::where('name', $data['name'])->first()){
                $category = new Category();
                $category->fill(['slug' => \Str::slug($data['name'])]);
                $category->fill($data)->save();
            }else{
                $category = Category::where('name', $data['name'])->first();
            }

            foreach ($data['news'] as $item){
                News::firstOrCreate([
                    'category_id'=> $category->id,
                    'title'=>$item['title'],
                    'content'=>$item['description']
                ]);
            }
        }
        return redirect()->route('admin.index');


    }

    public function create (Request $request)
    {
        $resource = new ParsResource();
        if ($request->isMethod('post')) {

            $this->validate($request, ParsResource::rules(),[],ParsResource::atributeNames());


            $resource->fill($request->all())->save();

            return view('admin.addResource')
                ->with('success', 'Ресурс успешно добавлен!');
        }


        return view('admin.addResource');

    }
    public function update(){}
}
