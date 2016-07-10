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
Route::resource('admin','AdminController');
Route::resource('student','StudentController');

Route::auth();

Route::get('/home', 'HomeController@index');


//for admin links
//student
//create a student. -- need to create a new blade page.
Route::get('/add-student','UserController@create');
//need to think about this. how do i want to update a student!!
Route::get('/update-student','UserController@update');

//teacher
//create a teacher
Route::get('/add-teacher','UserController@create');
//need to think about this. how do i want to update a teacher!!
Route::get('/update-teacher','UserController@update');

//class_branch
Route::get('/add-class','Class_branchController@create');

//subject
Route::get('/add-subject','SubjectController@create');



//for teacher links
//upload files
Route::get('/upload-files','FileController@create');