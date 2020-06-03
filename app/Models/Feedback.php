<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Feedback
 *
 * @property int $id
 * @property string $create_at
 * @property string $name имя
 * @property string $content текст отзыва
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feedback newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feedback newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feedback query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feedback whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feedback whereCreateAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feedback whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Feedback whereName($value)
 * @mixin \Eloquent
 */
class Feedback extends Model
{
    protected $table = 'feedback';
    protected $fillable = ['name','content'];
    public $timestamps = false;

    public static function rules()
    {
        $tableNameCategory = (new Category())->getTable();
        return [
            'name'=>'required|min:1|max:50',
            'content'=>'required|min:10',
        ];
    }
    public static function atributeNames()
    {
        return [
            'name'=> '"Имя"',
            'content'=>'"Текст отзыва"'
        ];
    }
}
