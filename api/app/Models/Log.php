<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $administrator
 * @property string $log
 * @property string $date_add
 * @property Administrator $administrator
 */
class Log extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['administrator', 'log', 'date_add'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function administrator()
    {
        return $this->belongsTo('App\Administrator', 'administrator', 'username');
    }
}
