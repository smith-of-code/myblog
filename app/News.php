<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{


    private static $news = [
        1 => [
            'id'=> 1,
            'name'=> 'news1',
            'category_id'=> 2,
            'title'=> 'новость 1',
            'desc'=>'описание новости 1'
        ],
        2 => [
            'id'=> 2,
            'name'=> 'news2',
            'category_id'=> 2,
            'title'=> 'новость 2',
            'desc'=>'описание новости 2'
        ],
        3 => [
            'id'=> 3,
            'name'=> 'news3',
            'category_id'=> 1,
            'title'=> 'новость 3',
            'desc'=>'описание новости 3'
        ],
        4 => [
            'id'=> 4,
            'name'=> 'news4',
            'category_id'=> 1,
            'title'=> 'новость 4',
            'desc'=>'описание новости 4'
        ],
        5 => [
            'id'=> 5,
            'name'=> 'news5',
            'category_id'=> 3,
            'title'=> 'новость 5',
            'desc'=>'описание новости 5'
        ],
        6 => [
            'id'=> 6,
            'name'=> 'news6',
            'category_id'=> 3,
            'title'=> 'новость 6',
            'desc'=>'описание новости 6'
        ],

    ];

    public static function getNews() {
        return static::$news;
    }

    public static function getNewsId($id) {
        return static::$news[$id];
    }
    public static function getNewsCategory($id) {
        $newsCategory = [];
        foreach (static::$news as $item){
            if ($item['category_id'] == $id){
                $newsCategory[] = $item;
            }
        }
        return $newsCategory;
    }

}
