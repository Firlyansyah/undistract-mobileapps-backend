<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VariableSession extends Model
{
    protected $table = 'variable_session_table';

    protected $fillable = [
        'userId',
        'appName',
        'packageName',
        'secondsLeft',
        'coolDownDuration',
        'coolDownEndTime',
        'isOnCoolDown',
        'isActive',
        'isParental',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
