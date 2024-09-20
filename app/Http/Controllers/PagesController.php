<?php

namespace App\Http\Controllers;
use App\Photo;
use App\Vision;
use App\Video;
use App\Biography;
use App\Activity;
use App\Diary;
use App\Post;
use DB;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function photos(){
      $photos= Photo::latest()->get();
      return view ('photos', compact('photos'));
    }

    public function videos(){
        $videos= Video::latest()->get();
      return view ('videos', compact('videos'));
    }


    public function vision(){
      $visions = Vision::latest()->get();
      return view ('vision', compact('visions'));
    }

    public function posts(){
      $posts = Post::latest()->get();
      return view ('posts', compact('posts'));
    }

    public function aboutUs(){
      $biographies = Biography ::latest()
      ->orderByRaw('(id)desc LIMIT 1')
      ->get();

      $activities = Activity ::latest()
      ->orderByRaw('(id)desc LIMIT 4')
      ->get();

      $diaries = Diary::latest()->get();

      $photos= Photo::latest()->get();

      return view ('aboutUs', compact('biographies', 'activities', 'diaries', 'photos'));
    }

    public function contact(){
      return view ('contact');
    }

}
