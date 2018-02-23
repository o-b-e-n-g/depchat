<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    //

      protected $fillable = [
        'sender_id', 'recipient_id', 'message'
    ];

	 public function members_send()
    {
        return $this->belongsTo(Members::class, 'sender_id');
    }

    public function members_receive()
    {
        return $this->belongsTo(Members::class, 'recipient_id');
    }

     public function courses()
    {
        return $this->belongsTo(Channels::class, 'recipient_id');
    }




}
