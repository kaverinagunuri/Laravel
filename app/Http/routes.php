<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', array(
//    'as'=>'home',
//    'uses'=>'HomeController@home'
//));

/*use App\User;
Route::get('/User',function(){
   $user=User::find(1);
   print_r($user);
});*/

Route::get('/Counter',array(
    'as'=>'Counter',
    'uses'=>'counterController@home'
));

//Route::get('/SecureUpload',array(
//    'as'=>'Secure',
//    'uses'=>'SecureController@home'
//));
//Route::post('/SecureUpload#',array(
//    'as'=>'Secure',
//    'uses'=>'SecureController@upload'
//));
Route::get('/SecureUpload', 'SecureController@index');
//Route::post('/', 'SecureController@uploadFiles');
Route::post('/Secure',array(
    'as'=>'Secure-post',
    'uses'=>'SecureController@uploadFiles'
));


