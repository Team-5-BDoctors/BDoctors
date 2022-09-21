<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserSponsorship extends Pivot
{

    public function userSponsorship()
    {
        return $this->belongsTo('App\User', "starts_at", "ends_at");
    }

    
    protected $fillable = [
        'starts_at', 'ends_at'
    ];

}
