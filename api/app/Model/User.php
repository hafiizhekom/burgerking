<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

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
    protected $fillable = ['email', 'phone', 'name', 'password', 'birthday', 'date_add', 'date_update', 'active'];

}
