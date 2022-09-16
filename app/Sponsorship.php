<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Model
{
    public function users()
    {
        // many to many
        return $this->belongsToMany('App\User');
    }
}
