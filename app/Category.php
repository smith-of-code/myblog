<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function getCategory() {
        return \DB::select('select id, name, is_private from category');
    }
    public function getCategoryOne($id) {
        $news = \DB::select('select id, name, is_private from category where id = :id',
            ['id'=>$id]
        );
        return $news[0];
    }

}
