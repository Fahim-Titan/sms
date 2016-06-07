<?php namespace App\Http\Controllers;

use App\Subject;
use App\Class_branch;
use App\Teacher_assign;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;
class Teacher_assignController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
//    return 'u r in teacher assign page';
//    $teacher = DB::table('users')->where('roles','=','teacher')->get();
//    return view('teachers_list',compact('teacher'));

    return view('teacher.dashboard');
//    $info = DB::Select(DB::raw("select subjects.sub_id,subjects.cb_id, class_branches.name, subjects.sub_name, subjects.textbook_name from class_branches, subjects where class_branches.cb_id = subjects.cb_id"));
//    return view('teacher_assigns',compact('info','teacher'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
//    return view('teacher_assigns');
//    $sub_info = DB::table('subjects')->lists('sub_name','sub_id');
//    $class_info = DB::table('class_branches')->lists('name','cb_id');
//    $teacher = DB::table('users')->where('roles','=','teacher')->lists('name','id');
//      $sub_info = DB::select('sub_name','sub_id','cb_id','cb_name')->join;

//    $c_name = DB::table('cbranches')->where("$sub_info->

//    ai khane jodi keu amon kono akta subject choose korlo jeta
//    already class_branch table a assign kore nai tahole tokhn ki hobe??
//    $info = DB::Select(DB::raw("select subjects.sub_id,subjects.cb_id, class_branches.name, subjects.sub_name, subjects.textbook_name from class_branches, subjects where class_branches.cb_id = subjects.cb_id"));
//    return view('teacher_assigns',compact('info'));
//    return view('teacher_assigns',compact('sub_info','class_info','teacher'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Requests\teacherAssignRequest $request)
  {
    $teacher = new Teacher_assign();
    $teacher->sub_id = $request->sub_id;
    $teacher->cb_id = $request->cb_id;
    $teacher->id = $request->id;
    $teacher-> save();
    return "data saved";
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>