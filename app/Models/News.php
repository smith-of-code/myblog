<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\News
 *
 * @property int $id
 * @property int $category_id id категории
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $title заголовок
 * @property string $desc описание новости
 * @property string $content текст новости
 * @property string|null $image картинка новости
 * @property int $is_private Приватность новости
 * @property int $published Опубликованна или нет
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereIsPrivate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\News whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['title', 'desc', 'content', 'image', 'is_private', 'published', 'category_id'];

    public static function rules()
    {
        $tableNameCategory = (new Category())->getTable();
        return [
            'title'=>'required|min:1|max:15',
            'desc'=> 'required|min:20|max:100',
            'content'=>'required|min:50',
            'image'=> 'mimes:jpeg,bmp,png',
            'category_id'=> "required|exists:{$tableNameCategory},id"
        ];
    }
    public static function atributeNames()
    {
        return [
            'title'=>'"Название новости"',
            'desc'=> '"Описание"',
            'content'=>'"Текст новости"',
            'image'=> '"Файл"'

        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id')->first();
    }
}
