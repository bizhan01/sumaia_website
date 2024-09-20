<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Photo;
use DB;


class PhotoController extends Controller
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
      $photos= Photo::latest()->get();
      return view('admin.photo.photo', compact('photos',));
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
               'image' => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'
           ]);
           if($image = $request->file('image')){
             $new_name =rand() . '.' . $image-> getClientOriginalExtension();
             $image -> move(public_path("UploadedImages"), $new_name);
           }
           else {
             $new_name = 'about.png';
           }
             Photo::create([
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



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from photos where id = ?',[$id]);
     return back();
  }

}
