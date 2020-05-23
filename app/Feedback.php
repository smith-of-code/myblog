<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\File;

class Feedback extends Model
{
    public static function writeFeedback($feedback)
    {
//        file::append('path/to/file', 'appended file content');
        return Storage::append('feedback.json', json_encode($feedback));

    }
}
