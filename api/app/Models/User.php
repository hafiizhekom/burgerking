<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Laravel\Lumen\Auth\Authorizable;

/**
 * @property int $id
 * @property string $email
 * @property string $phone
 * @property string $name
 * @property string $password
 * @property string $birthday
 * @property string $date_add
 * @property string $date_update
 * @property string $active
 */
class User extends Model
{
    /**
     * @var array
     */

    use Authenticatable, Authorizable;
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = true;
    protected $dateFormat = 'Y-m-d H:i:s';

    const CREATED_AT = 'date_add';
    const UPDATED_AT = 'date_update';

    protected $table = 'users';

    protected $fillable = ['email', 'phone', 'name', 'password', 'birthday', 'date_add', 'date_update', 'active'];


    protected $hidden = [
        'date_add',
        'date_update',
        'active',
        'password'
    ];

    protected $connection = 'mysql';

}
