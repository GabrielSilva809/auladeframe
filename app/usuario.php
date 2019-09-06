<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{

	public function setor(){
		return $this->belongsTo('App\setores');
	}
    
public function recados(){
		return $this->hasMany('App\recados');
}
