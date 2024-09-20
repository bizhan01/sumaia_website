<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  $visions = DB::table('visions')->latest()->get();
  $sliders = DB::table('sliders')->latest()->orderByRaw('(id)desc LIMIT 3')->get();
  $videos = DB::table('videos')->latest()->orderByRaw('(id)desc LIMIT 3')->get();
  $biographies = DB::table('biographies')->latest()->orderByRaw('(id)desc LIMIT 1')->get();
  $posts = DB::table('posts')->latest()->orderByRaw('(id)desc LIMIT 1')->get();

    return view('welcome', compact('visions', 'sliders', 'biographies', 'videos', 'posts'));
});

Route::get('/photos', 'PagesController@photos')->name('photos');
Route::get('/videos', 'PagesController@videos')->name('videos');
Route::get('/visions', 'PagesController@vision')->name('visions');
Route::get('/posts', 'PagesController@posts')->name('posts');
Route::get('/aboutUs', 'PagesController@aboutUs')->name('aboutUs');
Route::get('/contactUs', 'PagesController@contact')->name('contactUs');
Route::post('/emailSubscribe', 'EmailSubscribeController@store')->name('emailSubscribe');
Route::post('/sendMessage', 'SendMessageController@store')->name('sendMessage');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/activity', 'ActivityController@index')->name('activity');
Route::post('/addAct', 'ActivityController@store')->name('addAct');
Route::get('/deleteAct/{id}','ActivityController@destroy')->name('deleteAct/{id}');
Route::get('/editAct/{id}','ActivityController@show')->name('editAct/{id}');
Route::post('/editAct/{id}','ActivityController@edit')->name('editAct/{id}');

Route::get('/photo', 'PhotoController@index')->name('photo');
Route::post('/photo', 'PhotoController@store')->name('photo');
Route::get('/deletePhoto/{id}','PhotoController@destroy')->name('deletePhoto/{id}');


Route::get('/video', 'VideoController@index')->name('video');
Route::post('/addVideo', 'VideoController@store')->name('addVideo');
Route::get('/deleteVideo/{id}','VideoController@destroy')->name('deleteVideo/{id}');
Route::get('/editVideo/{id}','VideoController@show')->name('editVideo/{id}');
Route::post('/editVideo/{id}','VideoController@edit')->name('editVideo/{id}');

Route::get('/subscribe', 'SubscribeController@index')->name('subscribe');
Route::get('/deleteEmail/{id}','SubscribeController@destroy')->name('deleteEmail/{id}');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/deleteContact/{id}','ContactController@destroy')->name('deleteContact/{id}');

Route::get('/diary', 'DiaryController@index')->name('diary');
Route::post('/addDiary', 'DiaryController@store')->name('addDiary');
Route::get('/deleteDiary/{id}','DiaryController@destroy')->name('deleteDiary/{id}');
Route::get('/editDiary/{id}','DiaryController@show')->name('editDiary/{id}');
Route::post('/editDiary/{id}','DiaryController@edit')->name('editDiary/{id}');

Route::get('/vision', 'VisionController@index')->name('vision');
Route::post('/addVision', 'VisionController@store')->name('addVision');
Route::get('/deleteVision/{id}','VisionController@destroy')->name('deleteVision/{id}');
Route::get('/editVision/{id}','VisionController@show')->name('editVision/{id}');
Route::post('/editVision/{id}','VisionController@edit')->name('editVision/{id}');

Route::get('/post', 'PostController@index')->name('post');
Route::post('/addPost', 'PostController@store')->name('addPost');
Route::get('/deletePost/{id}','PostController@destroy')->name('/deletePost/{id}');
Route::get('/editPost/{id}','PostController@show')->name('/editPost/{id}');
Route::post('/editPost/{id}','PostController@edit')->name('editPost/{id}');

Route::get('/bio', 'BiographyController@index')->name('bio');
Route::post('/addBio', 'BiographyController@store')->name('addBio');
Route::get('/deleteBio/{id}','BiographyController@destroy')->name('deleteBio/{id}');
Route::get('/editBio/{id}','BiographyController@show')->name('editBio/{id}');
Route::post('/editBio/{id}','BiographyController@edit')->name('editBio/{id}');


Route::get('/slider', 'SliderController@index')->name('slider');
Route::post('/addSlider', 'SliderController@store')->name('addSlider');
Route::get('/deleteSlider/{id}','SliderController@destroy')->name('deleteSlider/{id}');
Route::get('/editSlider/{id}','SliderController@show')->name('editSlider/{id}');
Route::post('/editSlider/{id}','SliderController@edit')->name('editSlider/{id}');
