<?php namespace App\Http\Controllers;

use App\Subject;
use App\Class_branch;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;
class SubjectController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
//     return view('subjects');
//     return 'you are in subjects page';
    $class = new Class_branch();
//    $class_info=DB::table('class_branches')->select('name','cb_id')->get();
    $class_info=DB::table('class_branches')->lists('name','cb_id');
//    $class_info = 'asdf';
//    $class_info = Class_branch::lists('cb_id','name');
    return view('subjects',compact('class_info'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('subjects');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Requests\createSubjectRequest $request)
  {
    $subject = new Subject();
    $subject->cb_id = $request->cb_id;
    $subject->sub_name = $request->sub_name;
    $subject->textbook_name = $request->textbook_name;
    $subject->save();
    return 'data saved';
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