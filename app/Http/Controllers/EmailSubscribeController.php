<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Subscribe;
use DB;

class EmailSubscribeController extends Controller
{
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
        $this->validate(request(),[
       'email'=>'required|unique:subscribes',

  ]);
    Subscribe::create([
        'email' => request('email'),
        'created_at'=>carbon::now(),
        'updated_at'=>carbon::now(),
      ]);

      try {
       session()->flash('emailSuccess', 'عملیات موافقانه اجرا شد ');
       return back();
       } catch(Exception $ex) {
       session()->flash('failed', 'خطا! دوباره کوشش کنید');
       return back();
     }
  }
}
