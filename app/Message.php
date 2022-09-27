<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'email',
        'title',
        'content',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
