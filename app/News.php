<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    public function getNews() {
      return \DB::select('select id, title, `desc`, image , is_private, published from news');
    }

    public function getNewsId($id) {
        $news = \DB::select('select id, title, content, image, is_private, published from news where id = :id',
            ['id'=>$id]
        );
        return $news[0];
    }
    public function getNewsCategory($id) {
        return \DB::select('select id, title, `desc`, image , is_private, published from news where category_id = :id',
            [
                'id' => $id
            ]);

    }

    public function NewsAdd($data) {
        return \DB::insert(
            'insert into news (category_id, title, `desc`, content) values (:category_id, :title, :desc, :content)',
            [
            'category_id'=>$data['category'],
            'title'=>$data['title'],
            'desc'=>$data['desc'],
            'content'=>$data['content']
            ]
        );

    }

}
