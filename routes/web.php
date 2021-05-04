<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')//->name('home')->middleware('verified')
;

Route::get('/welcome',function (){
   return view('landing') ;
});




Route::get('/redirect/{service}','SocialController@redirect');



//Route::get('login',function (){
//    return 'سجل الاول';
//})->name('login');

//Normal Route Without Words in URL
Route::get('/', function () {
    return view('welcome');
});



/*
//Important
//Make resource Route
Route::resource('news','Front\UserController');

//Route To write num Or Word That you Wroten in Url
Route::get('/{id}', function ($id) {
    return $id;
});



// Route With Words in URL And Reference To make it easy to reach
Route::get('/testword', function () {
    return 'Welcome';
})->name('testword');

// Route With Namespace to Make Route Group
Route::namespace('Front')->group(function (){
    Route::get('/show','UserController@show');

});

// Route With Middleware
Route::get('check',function (){
    return 'middle';
})->middleware('auth');



Route::group(['namespace'=>'Front','middleware'=>'auth'],function (){

    Route::get('namespace','UserController@show', function () {
        return 'return';
    });

//تدريب
Route::get('az','Front\UserController@index');

Route::get('j','Front\UserController@b');

*/


