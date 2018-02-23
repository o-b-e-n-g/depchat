<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    //

    protected $fillable = [
        'id', 'course_name', 'level',
    ];
    
     public function channels()
    {
        return $this->hasMany(Channels::class);
    }


    	 public function messages()
    {
        return $this->hasMany(Messages::class, 'recipient_id');
    }
}
