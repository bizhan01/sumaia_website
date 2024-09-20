<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Post;
use DB;

class PostController extends Controller
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
      $posts = Post::latest()->get();
      return view('admin.post.post', compact('posts',));
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
            'author'=>'required|max: 20',
            'content'=>'required',
            'image' => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'
        ]);
        if($image = $request->file('image')){
          $new_name =rand() . '.' . $image-> getClientOriginalExtension();
          $image -> move(public_path("UploadedImages"), $new_name);
        }
        else {
          $new_name = 'about.png';
        }
          Post::create([
              'title' => request('title'),
              'author' => request('author'),
              'content' => request('content'),
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
         $posts = DB::select('select * from posts where id = ?',[$id]);
         return view('admin.post.editPost',['posts'=>$posts]);
      }



      public function edit(Request $request,$id) {
         $title = $request->input('title');
         $author = $request->input('author');
         $content = $request->input('content');

         if($image = $request->file('image')){
           $new_name =rand() . '.' . $image-> getClientOriginalExtension();
           $image -> move("UploadedImages", $new_name);
         }
         else {
           $new_name = $request->input('image');
         };

         DB::update('update posts set title = ? where id = ?',[$title,$id]);
         DB::update('update posts set author = ? where id = ?',[$author,$id]);
         DB::update('update posts set content = ? where id = ?',[$content,$id]);
         DB::update('update posts set image = ? where id = ?',[$new_name,$id]);
         return redirect('/post');
      }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from posts where id = ?',[$id]);
     return back();
  }
}
