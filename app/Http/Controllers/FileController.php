<?php namespace App\Http\Controllers;

use App\File;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use DB;
class FileController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    //return 'you r in file uploading page';
    return view('files');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('files');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Requests\FileUploadRequest $request)
  {
    $fileUpload = new File();
    $fileUpload->id = Auth::id();
    $fileUpload->date = $request->date;
    $fileUpload->type = $request->type;

    if($request->hasFile('file_path')){
      $file = Input::file('file_path');
      $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
      $name = $timestamp . '-' . $file->getClientOriginalName();
      $fileUpload->file_path = $name;
      $file->move(public_path() . '/files', $name);
    }
    $fileUpload->save();

    return "saved";
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

  public function notice_list()
  {
      $notice_list = DB::table('files')->where('type','=','notice')->get();
      return view('others.notice_list',compact('notice_list'));
  }

}

?>