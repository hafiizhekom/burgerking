<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

/**
 * @property int $id
 * @property int $category
 * @property string $code
 * @property string $name
 * @property string $date_add
 * @property string $date_update
 * @property string $active
 */
class Order extends Model
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

    protected $table = 'orders';

    protected $fillable = ['user', 'type', 'location', 'address', 'phone', 'note', 'active'];

    protected $hidden = [
        'date_add',
        'date_update',
        'active'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user');
    }

    public function store()
    {
        return $this->belongsTo('App\Models\Store', 'location', 'code');
    }
}
