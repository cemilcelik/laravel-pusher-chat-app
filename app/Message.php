<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillabele = ['message'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
