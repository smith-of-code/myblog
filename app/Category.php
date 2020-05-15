<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    private static $category = [
        1 => [
            'id'=> 1,
            'name'=> 'cat1',
            'title'=> 'категория 1'

        ],
        2 => [
            'id'=> 2,
            'name'=> 'cat2',
            'title'=> 'категория 2'

        ],
        3 => [
            'id'=> 3,
            'name'=> 'cat3',
            'title'=> 'категория 3'

        ]


    ];

    public static function getCategory() {
        return static::$category;
    }
    public static function getCategoryOne($id) {
        return static::$category[$id];
    }

}
