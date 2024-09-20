<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Video;
use DB;


class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      $videos= Video::latest()->get();
      return view('admin.video.video', compact('videos',));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate(request(),[
        'title'=>'required|max: 40',
        'video'=>'required',

    ]);
      Video::create([
          'title' => request('title'),
          'video' => request('video'),
          'created_at'=>carbon::now(),
          'updated_at'=>carbon::now(),
        ]);

        try {
         session()->flash('success', 'عملیات موافقانه اجرا شد ');
         return back();
         } catch(Exception $ex) {
         session()->flash('failed', 'خطا! دوباره کوشش کنید');
         return back();
       }
    }


        public function show($id) {
         $video = DB::select('select * from videos where id = ?',[$id]);
         return view('admin.video.editVideo',['video'=>$video]);
      }


      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\Task  $task
       * @return \Illuminate\Http\Response
       */
       public function edit(Request $request,$id) {
          $title = $request->input('title');
          $video = $request->input('video');

          DB::update('update videos set title = ? where id = ?',[$title,$id]);
          DB::update('update videos set video = ? where id = ?',[$video,$id]);
          return redirect('/video');
       }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from videos where id = ?',[$id]);
     return back();
    }
}
