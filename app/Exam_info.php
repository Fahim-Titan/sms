<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam_info extends Model {

	protected $table = 'exam_infos';
	public $timestamps = true;
	protected $fillable = array('type');

	public function results()
	{
		return $this->hasMany('Result', 'e_id');
	}

}