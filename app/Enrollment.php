<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model {

	protected $table = 'enrollments';
	public $timestamps = true;
	protected $fillable = array('id', 'cb_id');

	public function user()
	{
		return $this->belongsTo('User', 'id');
	}

}