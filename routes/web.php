<?php
use App\User;
use App\Week;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin','AdminController@login');

Route::match(['get','post'], '/admin','AdminController@login');

Route::get('/admin/getallstudents',function(){
    $user = User::all();
   echo $user;
});

Route::get('/create-user-week', function(){
    $user= User::find(1);

    $week = new  Week(['week_name'=>'week 1']);

    $user->weeks()->save($week);
});

Route::get('/show-user-week',function(){
    //instead of 1 pass user id and show list of weeks and user
   $user = User::findOrFail(1);
   foreach ($user->weeks as $week){
     // dd($week);
       echo $week;
    //  echo $week->is_complete;
       // dd($week->is_complete);

   }
});

Route::get('/update-user-week',function(){
    $user = User:: findOrFail(1);
    if ($user->has('weeks')){
        foreach ($user->weeks as $week){
            if($week->is_complete = false){
                $week->is_complete = true;
                $week->save();
            }
        }

    }
});