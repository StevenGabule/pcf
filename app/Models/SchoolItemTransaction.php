<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolItemTransaction extends Model
{
    protected $guarded = [];

    public function school_item()
    {
        return $this->belongsTo(SchoolItem::class, 'school_item_id');
    }

}
