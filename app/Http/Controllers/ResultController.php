<?php namespace App\Http\Controllers;

//use Symfony\Component\HttpFoundation\Request;
use App\Enrollment;
use App\Result;
use Excel;
use Request;
use DB;
use App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class ResultController extends Controller {
public $count = 0;
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
    $subject_name = DB::table('subjects')->where('sub_id','=',$sub_id)->pluck('sub_name');
    $id=DB::table('enrollments')->join('subjects','enrollments.cb_id','=','subjects.cb_id')->where('subjects.sub_id','=',$sub_id)->get();
    $count = count($id);
    //return view('upload_result',compact('id','sub_id','subject_name','e_id'));
    $count = 0;
    $data = array();
    foreach($id as $info){
      $count++;
      $data[$count]=$info->id;
    }
//(select * from enrollments);
//   $model = Result::join('subjects','enrollments.cb_id','=','subjects.cb_id')->where('subjects.sub_id','=',$sub_id)->pluck('id');
   $model = \DB::connection()->getSchemaBuilder()->getColumnListing("results");

    Excel::create('Filename',function($excel) use($model){
      $excel->setTitle('result for $subject_name');
      $excel->sheet('Result', function($sheet) use($model) {
        $sheet->freezeFirstRow();
//        $sheet->fromArray($data);
        $sheet->fromModel($model);

      });
    })->download('xls');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
//    for ($i = 0; $i < 4; $i++){
//      $result = new Result();
//    $result->id = $request->id;
//    $result->sub_id = $request->sub_id;
//    $result->e_id = $request->e_id;
//    $result->marks = $request->marks;
//    $result->save();
//  }
//    return $i;
//    $data = array(
//    for($i = 0; $i<$request->count; $i++) {
//
//          array('id' => $request->id, 'sub_id' => $request->sub_id, 'e_id' => $request->e_id, 'marks' => $request->marks),
//      );
//
//    }
//    Result::insert($data);
//    for($i = 0; $i<4; $i++) {
//      DB::table('results')->insert(array($request->id,$request->sub_id,$request->e_id,$request->marks));
//    }
////    return view('admin.dashboard')->withSuccess('data has been saved');
//    return $i;


    //forgot the times attempt

    if (!Input::hasFile('file')) {
      return "file nai.";
    } else {
      try {
        Excel::load(Input::file('file'), function ($reader) {

//          foreach ($reader->toArray() as $row) {
//            Result::firstOrCreate($row);
//          }
          $reader->each(function($sheet){
            Result::firstOrCreate($sheet->toArray());
          });
        });
//        \Session::flash('success', 'Users uploaded successfully.');
//        return redirect(route('user.index'));
//      }
        return "saved";
      }catch (\Exception $e) {
//        \Session::flash('error', $e->getMessage());
//        return redirect(route('user.index'));
        return "not saved $e";
      }
    }
  }

//public  function postResult(){
//  if (!Input::hasFile('file')) {
//    return "file nai.";
//  } else {
//    try {
//      Excel::load(Input::file('file'), function ($reader) {
//
////          foreach ($reader->toArray() as $row) {
////            Result::firstOrCreate($row);
////          }
//        $reader->each(function($sheet){
//          Result::firstOrCreate($sheet->toArray());
//        });
//      });
////        \Session::flash('success', 'Users uploaded successfully.');
////        return redirect(route('user.index'));
////      }
//      return "saved";
//    }catch (\Exception $e) {
////        \Session::flash('error', $e->getMessage());
////        return redirect(route('user.index'));
//      return "not saved $e";
//    }
//  }
//}
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