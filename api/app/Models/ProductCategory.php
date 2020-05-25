<?php

namespace App\Models;

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

    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = true;
    protected $dateFormat = 'Y-m-d H:i:s';

    const CREATED_AT = 'date_add';
    const UPDATED_AT = 'date_update';

    protected $table = 'product_categories';

    protected $fillable = ['code', 'name', 'date_add', 'date_update', 'active'];

    protected $hidden = [
        'date_add',
        'date_update',
        'active'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'category');
    }
}
