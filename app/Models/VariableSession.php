<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VariableSession extends Model
{
    protected $table = 'variable_session_table';

    protected $fillable = [
        'uuid',
        'userId',
        'appName',
        'packageName',
        'secondsLeft',
        'coolDownDuration',
        'coolDownEndTime',
        'isOnCoolDown',
        'isActive',
        'isParental',
        'isSynced'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
