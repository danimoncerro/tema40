<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class1 extends Model
{
    public function students()
    {
    	return $this->hasMany('App\Student');
    }
}

