<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    //
     public function member_add()
    {
        return $this->belongsTo(Members::class, 'user_add');
    }

    public function member_list()
    {
        return $this->belongsTo(Members::class, 'user_list');
    }
}
