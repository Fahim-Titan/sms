<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher_assign extends Model {

	protected $table = 'teacher_assigns';
	public $timestamps = true;
	protected $fillable = array('sub_id', 'cb_id', 'id');

	public function cbranch()
	{
		return $this->belongsToMany('Class_branch');
	}

	public function user()
	{
		return $this->hasOne('User');
	}

}