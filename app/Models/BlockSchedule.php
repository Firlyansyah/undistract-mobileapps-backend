<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlockSchedule extends Model
{
    protected $table = 'block_schedules_table';

    protected $fillable = [
        'uuid',
        'userId',
        'appName',
        'packageName',
        'daysOfWeek',
        'isAllDay',
        'startTime',
        'endTime',
        'isActive',
        'isParental'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
