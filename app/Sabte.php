<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sabte extends Model
{
    protected $guarded = [];

    public function getUser()
    {
        return $this->hasMany(Sabte::class , 'id' , 'user_id');
    }
}
