<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function year()
    {
    	return $this->belongsTo('App\Year');
    }
}
