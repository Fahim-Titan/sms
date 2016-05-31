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
    return 'u r in teacher assign page';
    $sub_info = DB::table('subjects')->lists('sub_name','sub_id');
    $sub_info = DB::table('class_branches')->lists('name','cb_id');
//    ai khane jodi keu amon kono akta subject choose korlo jeta
//    already class_branch table a assign kore nai tahole tokhn ki hobe??
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('teacher_assigns');
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