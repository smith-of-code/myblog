<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\File;

class Feedback extends Model
{
    public static function writeFeedback($feedback)
    {
        \DB::insert('insert into feedback (`name`, `content`, create_at) values (:name, :content, now())' ,
        [
            'name' => $feedback['name'],
            'content'=> $feedback['content']
        ]
            );

    }
}
