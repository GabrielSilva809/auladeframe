<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setores extends Model
{
	public function usuario(){
		return $this->hasMany('App\usuario');
    //
}
}
