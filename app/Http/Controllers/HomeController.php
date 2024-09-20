<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Vidoe;
use App\Post;
use App\Contact;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $photoCount = DB::table('photos')->count('id');
      $videoCount = DB::table('videos')->count('id');
      $postCount = DB::table('posts')->count('id');
      $contactCount = DB::table('contacts')->count('id');
        return view('home', compact('photoCount', 'videoCount', 'postCount', 'contactCount'));
    }
}
