<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $date_add
 * @property string $date_update
 * @property string $active
 * @property Log[] $logs
 */
class Administrator extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['username', 'email', 'password', 'date_add', 'date_update', 'active'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function logs()
    {
        return $this->hasMany('App\Log', 'administrator', 'username');
    }
}
