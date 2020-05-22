<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $category
 * @property string $code
 * @property string $name
 * @property string $date_add
 * @property string $date_update
 * @property string $active
 * @property ProductCategory $productCategory
 */
class Product extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['category', 'code', 'name', 'date_add', 'date_update', 'active'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productCategory()
    {
        return $this->belongsTo('App\ProductCategory', 'category');
    }
}
