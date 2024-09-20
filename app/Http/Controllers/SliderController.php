<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Slider;
use DB;

class SliderController extends Controller
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
      $sliders = Slider::latest()
      ->orderByRaw('(id)desc LIMIT 3')
      ->get();
      return view('admin.slider.slider', compact('sliders',));
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
            'title'=>'required|max: 15',
            'subTitle'=>'required|max: 10',
            'image' => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'
        ]);
        if($image = $request->file('image')){
          $new_name =rand() . '.' . $image-> getClientOriginalExtension();
          $image -> move(public_path("UploadedImages"), $new_name);
        }
        else {
          $new_name = 'about.png';
        }
          Slider::create([
              'title' => request('title'),
              'subTitle' => request('subTitle'),
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
         $slider = DB::select('select * from sliders where id = ?',[$id]);
         return view('admin.slider.editSlider',['slider'=>$slider]);
      }



      public function edit(Request $request,$id) {
         $title = $request->input('title');
         $subTitle = $request->input('subTitle');

         if($image = $request->file('image')){
           $new_name =rand() . '.' . $image-> getClientOriginalExtension();
           $image -> move("UploadedImages", $new_name);
         }
         else {
           $new_name = $request->input('image');
         };

         DB::update('update sliders set title = ? where id = ?',[$title,$id]);
         DB::update('update sliders set subTitle = ? where id = ?',[$subTitle,$id]);
         DB::update('update sliders set image = ? where id = ?',[$new_name,$id]);
         return redirect('/slider');
      }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from sliders where id = ?',[$id]);
     return back();
  }
}
