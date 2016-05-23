<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class_branch extends Model {

	protected $table = 'class_branches';
	public $timestamps = true;
	protected $fillable = array('name', 'year');

}