<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyLimit extends Model
{
    protected $table = 'daily_limits_table';

    protected $fillable = [
        'uuid',
        'userId',
        'appName',
        'packageName',
        'icon',
        'timeLimitMinutes',
        'isActive',
        'isParental',
        'notificationType',
        'isSynced'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
