<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	protected $fillable = ['name'];

    public function tweets(){
    	return $this->belongsToMany('App\Tweet');
    }
}

// php artisan make:model Tag <- how model is created in the commandline