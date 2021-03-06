<?php namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Enrollment;
class EnrollmentController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
//    return 'u r in enrollments page';
  //  $info = DB::Select(DB::raw("select subjects.sub_id,subjects.cb_id, class_branches.name, subjects.sub_name, subjects.textbook_name from class_branches, subjects where class_branches.cb_id = subjects.cb_id"));
    $info = DB::table('class_branches')->lists('name','cb_id');
    return view('enrollments',compact('info'));
//    return view('enrollments');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('enrollments');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Requests\CreateEnrollmentRequest $request)
  {
    $enroll = new Enrollment();
    $enroll->id = $request->id;
    $enroll->cb_id = $request->cb_id;
    $enroll->save();
    return 'saved';
    //return view('enrollments')->withSuccess('data has been saved');
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