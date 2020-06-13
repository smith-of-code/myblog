<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ParsResource
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $link
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ParsResource newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ParsResource newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ParsResource query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ParsResource whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ParsResource whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ParsResource whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ParsResource whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
