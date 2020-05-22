<?php

namespace App\Model;

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
    protected $fillable = ['code', 'name', 'address', 'phone', 'latitude', 'longitude', 'date_add', 'date_update', 'active'];

}
