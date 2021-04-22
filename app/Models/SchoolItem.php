<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolItem extends Model
{
    protected $guarded = [];

    public function school_item_transactions()
    {
        return $this->hasOne(SchoolItemTransaction::class);
    }
}
