<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model {

	protected $table = 'results';
	public $timestamps = false;
	protected $fillable = array('id', 'sub_id', 'e_id','marks');

	public function exam_info()
	{
		return $this->belongsTo('Exam_info', 'e_id');
	}

}