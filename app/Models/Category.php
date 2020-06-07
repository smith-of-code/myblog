<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name название категории
 * @property int $is_private Приватность Категории
 * @property string $slug slug
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\News[] $news
 * @property-read int|null $news_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereIsPrivate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereSlug($value)
 * @mixin \Eloquent
 */
class Category extends Model
{
    protected $table = 'category';
    protected $fillable = ['name','slug','is_private'];

    public static function rules($update = false)
    {
        if($update){
            return [
                'name'=>'required|min:1|max:15',
                'slug'=>'sometimes'
            ];
        } else {
            return [
                'name'=>'required|min:1|max:15|unique:category',
                'slug'=>'sometimes|unique:category'
            ];
        }


    }
    public static function atributeNames()
    {
        return [
            'name'=>'"Название категории"',
            'slug'=> '"слаг"'
        ];
    }
    public function news()
    {
        return $this->hasMany(News::class, 'category_id');
    }
}
