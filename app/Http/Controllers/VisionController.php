<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Vision;
use DB;

class VisionController extends Controller
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
      $visions = Vision::latest()->get();
      return view('admin.vision.vision', compact('visions',));
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
            'name'=>'required|max: 30',
            'vision'=>'required|max: 450',
            'image' => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'
        ]);
        if($image = $request->file('image')){
          $new_name =rand() . '.' . $image-> getClientOriginalExtension();
          $image -> move(public_path("UploadedImages"), $new_name);
        }
        else {
          $new_name = 'about.png';
        }
          Vision::create([
              'name' => request('name'),
              'vision' => request('vision'),
              'image' => $new_name,
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
         $visions = DB::select('select * from visions where id = ?',[$id]);
         return view('admin.vision.editVision',['visions'=>$visions]);
      }



      public function edit(Request $request,$id) {
         $name = $request->input('name');
         $vision = $request->input('vision');

         if($image = $request->file('image')){
           $new_name =rand() . '.' . $image-> getClientOriginalExtension();
           $image -> move("UploadedImages", $new_name);
         }
         else {
           $new_name = $request->input('image');
         };

         DB::update('update visions set name = ? where id = ?',[$name,$id]);
         DB::update('update visions set vision = ? where id = ?',[$vision,$id]);
         DB::update('update visions set image = ? where id = ?',[$new_name,$id]);
         return redirect('/vision');
      }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from visions where id = ?',[$id]);
     return back();
  }
}
