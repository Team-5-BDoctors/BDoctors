<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Model
{
    public function users()
    {
        // many to many
        return $this->belongsToMany('App\User', 'user_sponsorship', 'sponsorship_id', 'user_id');
    }
}
