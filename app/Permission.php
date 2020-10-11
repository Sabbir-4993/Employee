<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $guarded=[];
    Protected $casts = [
      'name' => 'array',
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }
}
