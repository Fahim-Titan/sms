<?php 

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return view('home');
});


Route::resource('user', 'UserController');
Route::resource('subject', 'SubjectController');
Route::resource('class', 'Class_branchController');
Route::resource('teacher', 'Teacher_assignController');
Route::resource('enrollment', 'EnrollmentController');
Route::resource('attendence', 'AttendenceController');
Route::resource('file', 'FileController');
Route::resource('result', 'ResultController');
Route::resource('exam_info', 'Exam_infoController');

Route::auth();

Route::get('/home', 'HomeController@index');
