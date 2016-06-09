<?php namespace App\Http\Controllers;

use App\Class_branch;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class Class_branchController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
//    return ' you are in class branch page';
    return view('class_branches');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('class_branches');

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Requests\classbranchRequest $request)
  {
    $class = new Class_branch();
    $class->name = $request->name;
    $class->year = $request->year;
    $class->created_at = Carbon::now();
    $class->save();
    return 'saved';
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