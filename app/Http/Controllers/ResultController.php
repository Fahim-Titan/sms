<?php namespace App\Http\Controllers;

//use Symfony\Component\HttpFoundation\Request;
use Request;
use DB;
class ResultController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
//this line needs to be used
//select subjects.sub_id,class_branches.cb_id, subjects.sub_name ,class_branches.name from subjects,class_branches where subjects.cb_id=class_branches.cb_id
//    $sub_info = DB::table('subjects')->join('class_branches','subjects.cb_id')
    $sub_info = DB::table('subjects')->pluck('sub_name','sub_id');
    return view('results',compact('sub_info'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $sub_id = Request::get('sub_id');
    $e_id = Request::get('e_id');
    //first attempt
//    $id = DB::table('enrollments')
//        ->join('subjects',function($join){
//          $join->on('enrollments.cb_id','=','subjects.cb_id')
//            ->where('subjects.sub_id','=','$sub_id');
//        })->get();

//second attempt
    $id=DB::table('enrollments')->join('subjects','enrollments.cb_id','=','subjects.cb_id')->where('subjects.sub_id','=',$sub_id)->get();
    return view('upload_result',compact('id','sub_id'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    
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