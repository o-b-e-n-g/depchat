<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    //

    // public function messages()
    // {
    //     return $this->hasMany(Messages::class);
    // }

    protected $fillable = [
        'id', 'name', 'pin', 'level', 'status',
    ];
    

     public function messages_send()
    {
        return $this->hasMany(Messages::class, 'sender_id');
    }

     public function messages_receive()
    {
        return $this->hasMany(Messages::class, 'recipient_id');
    }

     public function contacts_add()
    {
        return $this->hasMany(Contacts::class, 'user_add');
    }

    public function contacts_list()
    {
        return $this->hasMany(Contacts::class, 'user_list');
    }

    public function channels()
    {
        return $this->hasMany(Channels::class, 'member_id');
    }

    public function status()
    {
    	 return $this->hasMany(Status::class);
    }


}
