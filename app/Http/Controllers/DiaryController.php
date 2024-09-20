<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Diary;
use DB;


class DiaryController extends Controller
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
      $diaries= Diary::latest()->get();
      return view('admin.diary.diary', compact('diaries',));
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
          'day'=>'required',
          'month'=>'required',
          'year'=>'required',
          'title'=>'required',
          'content'=>'required',

    ]);
      Diary::create([
          'day' => request('day'),
          'month' => request('month'),
          'year' => request('year'),
          'title' => request('title'),
          'content' => request('content'),
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
         $diary = DB::select('select * from diaries where id = ?',[$id]);
         return view('admin.diary.editDiary',['diary'=>$diary]);
      }


      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\Task  $task
       * @return \Illuminate\Http\Response
       */
       public function edit(Request $request,$id) {
          $day = $request->input('day');
          $month = $request->input('month');
          $year = $request->input('year');
          $title = $request->input('title');
          $content = $request->input('content');

          DB::update('update diaries set day = ? where id = ?',[$day,$id]);
          DB::update('update diaries set month = ? where id = ?',[$month,$id]);
          DB::update('update diaries set year = ? where id = ?',[$year,$id]);
          DB::update('update diaries set title = ? where id = ?',[$title,$id]);
          DB::update('update diaries set content = ? where id = ?',[$content,$id]);
          return redirect('/diary');
       }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from diaries where id = ?',[$id]);
     return back();
   }
}
