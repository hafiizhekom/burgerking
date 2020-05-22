<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $date_add
 * @property string $date_update
 * @property string $active
 * @property Product[] $products
 */
class ProductCategory extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['code', 'name', 'date_add', 'date_update', 'active'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Product', 'category');
    }
}
