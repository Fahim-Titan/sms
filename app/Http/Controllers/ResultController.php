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
//    select Subject.sub_id,Class.cb_id, Subject.sub_name ,Class.name from Subject,Class where Subject.cb_id=Class.cb_id
    return view('results');
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