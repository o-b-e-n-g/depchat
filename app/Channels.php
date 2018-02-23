<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channels extends Model
{
    //

    protected $fillable = [
        'member_id', 'course_id',
    ];
    

    public function course()
    {
    	return $this->belongsTo(Courses::class);
    }

    public function members()
    {
    	return $this->belongsTo(Members::class);
    }

}
