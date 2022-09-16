<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    public function users()
    {
        // many to many
        return $this->belongsToMany('App\User', 'user_specialization', 'specialization_id', 'user_id');
    }
}
