<?php namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;
class UserController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    return view('users');
//    return 'something';
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('users');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Requests\createUserRequest $request)
  {
    $user = new User();
    $user->name = $request->name;
    $user->blood_type = $request->blood_type;
    $user->email  = $request->email;
    $user->dob = $request->dob;
    $user->contact_number = $request->contact_number;
    $user->address = $request->address;
    $user->guardian_name = $request->guardian_name;
    $user->gurdian_phone_number = $request->gurdian_phone_number;
    $user->guardian_email = $request->guardian_email;
    $user->gender = $request->gender;
    $user->roles = $request->roles;
    $user->qualification = $request->qualification;
    if($request->hasFile('image')){
      $file = Input::file('image');
      $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
      $name = $timestamp . '-' . $file->getClientOriginalName();
      $user->image = $name;
      $file->move(public_path() . '/user_images', $name);
    }
    $user->password = bcrypt($request-> password);
    $user->save();
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


  public function teacher_list()
  {
    $teacher_list = DB::table('users')->where('roles','=','teacher')->get();
      return view('others.teacher_list',compact('teacher_list'));
  }
  
}

?>