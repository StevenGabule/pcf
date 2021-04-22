<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventActivity extends Model
{
    public function comments()
    {
        return $this->hasMany(EventActivityComment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
