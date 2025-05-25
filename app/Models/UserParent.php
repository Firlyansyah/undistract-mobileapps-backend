<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserParent extends Model
{
    protected $table = "user_parent_table";

    protected $fillable = [
        'userId',
        'pin',
        'email'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
