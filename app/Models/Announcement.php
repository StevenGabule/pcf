<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    public function comments()
    {
        return $this->hasMany(AnnouncementComment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
