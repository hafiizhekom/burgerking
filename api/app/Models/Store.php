<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $address
 * @property string $phone
 * @property float $latitude
 * @property float $longitude
 * @property string $date_add
 * @property string $date_update
 * @property string $active
 */
class Store extends Model
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

    protected $table = 'stores';

    protected $fillable = ['code', 'name', 'address', 'phone', 'latitude', 'longitude', 'date_add', 'date_update', 'active'];

    protected $hidden = [
        'date_add',
        'date_update',
        'active'
    ];

}
