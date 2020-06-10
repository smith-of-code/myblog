<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParsResource extends Model
{
    protected $table = 'pars_resource';
    protected $fillable = ['link'];

    public static function rules()
    {
        $tableNameCategory = (new Category())->getTable();
        return [
            'link'=>'required|unique:pars_resource',

        ];
    }
    public static function atributeNames()
    {
        return [
            'link'=>'"ссылка"',

        ];
    }

}
