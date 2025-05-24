<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlockPermanent extends Model
{
    protected $table = 'block_permanent_table';

    protected $fillable = [
        'uuid',
        'userId',
        'appName',
        'packageName',
        'isActive',
        'isParental',
        'isSynced'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
