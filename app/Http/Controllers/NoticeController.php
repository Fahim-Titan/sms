<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\File;
use Carbon\Carbon;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use DB;

class NoticeController extends Controller
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $notice_list = DB::table('files')->where('type','=','notice')->get();
        return view('others.notice_list',compact('notice_list'));
    }


    public function create()
    {
        return view('admin.notice_list');
    }

    public function store(Requests\FileUploadRequest $request)
    {
        $fileUpload = new File();
        $fileUpload->id = Auth::id();
        $fileUpload->date = $request->date;
        $fileUpload->type = 'notice';
        $fileUpload->file_heading = $request->heading;
        $fileUpload->file_description = $request->details;

        if($request->hasFile('file_path')){
            $file = Input::file('file_path');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $name = $timestamp . '-' . $file->getClientOriginalName();
            $fileUpload->file_path = $name;
            $file->move(public_path() . '/files', $name);
        }
        $fileUpload->save();

        return view('admin.dashboard')->withSuccess('Notice is created');
    }


}
