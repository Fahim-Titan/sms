<?php namespace App\Http\Controllers;
use App\Exam_info;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;
class Exam_infoController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
 public function index()
  {
   return view('exam_infos');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('exam_infos');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Requests\exam_info $request)
  {
    $info = new Exam_info();
    $info->type = $request->type;
   $info->save();
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