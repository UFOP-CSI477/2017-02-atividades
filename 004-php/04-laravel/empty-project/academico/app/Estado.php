<?php

	namespace App;

	use Illuminate\Database\Eloquent\Model;

	class Estado extends Model {

		//1-N -> estado -> cidades
		public function cidades(){
			return $this->hasMany('App\Cidade');
		}

	}

