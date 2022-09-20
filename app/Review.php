<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'title',
        'body',
        'vote',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
