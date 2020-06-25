<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function isOwn()
    {
        return (int) $this->user->id === (int) auth()->id();
    }
}
