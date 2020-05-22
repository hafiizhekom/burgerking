<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $code
 * @property string $title
 * @property string $content
 * @property string $date_add
 * @property string $date_update
 * @property string $active
 */
class Article extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['code', 'title', 'content', 'date_add', 'date_update', 'active'];

}
