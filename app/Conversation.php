<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $guarded = [];

    protected $dates = [
        'last_message_at'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->oldest();
    }

    public function messages()
    {
        return $this->hasMany(Message::class)->latest();
    }
}
