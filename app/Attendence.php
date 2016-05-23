<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model {

	protected $table = 'attendences';
	public $timestamps = true;
	protected $fillable = array('id', 'date', 'attend');

	public function user()
	{
		return $this->belongsTo('User');
	}

}