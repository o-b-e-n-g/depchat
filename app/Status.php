<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    public function members()
    {
        return $this->belongsTo(Members::class);
    }
}
