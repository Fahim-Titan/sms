<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

	protected $table = 'users';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('name', 'dob', 'address', 'email', 'contact_number', 'guardian_name', 'gurdian_phone_number', 'guardian_email', 'password', 'image', 'qualification', 'blood_type');
	protected $hidden = array('password');

	public function attend()
	{
		return $this->hasMany('Attendence', 'id');
	}

	public function enroll()
	{
		return $this->hasMany('Enrollment', 'id');
	}

	public function file()
	{
		return $this->hasMany('File', 'id');
	}

	public function teacher()
	{
		return $this->belongsToMany('Teacher_assign', 'id');
	}

}