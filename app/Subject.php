<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model {

	protected $table = 'subjects';
	public $timestamps = true;
	protected $fillable = array('cb_id', 'sub_name', 'textbook_name');

	public function results()
	{
		return $this->hasMany('Result');
	}

	public function cbranch()
	{
		return $this->belongsToMany('Class_branch','cb_id','cb_id');
	}

}