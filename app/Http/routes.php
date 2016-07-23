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


/*
Route::get('register','Homecontroller@index');

Route::get('login',array('as'=>'login','before'=>'csrf','uses'=>'AuthController@loginpage'));
Route::post('loginform',array('as'=>'loginform','before'=>'csrf','uses'=>'AuthController@mainpage'));
Route::get('studenthome',array('as'=>'studenthome','before'=>'auth','uses'=>'AuthController@index'));
//Route::get('logout',array('as'=>'logout','before'=>'auth','uses'=>'AuthController@logoutmethod'));
*/


Route::get('/', function () {
    return view('welcome');
});


Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Registration routes...
Route::get('admin/register', 'Auth\AuthController@admingetRegister');
Route::post('admin/register', 'Auth\AuthController@adminpostRegister');


Route::get('admin/logout', 'Auth\AuthController@getLogout');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/adminhome','HomeController@adminindex');
Route::get('apphome','Homecontroller@apphome');
Route::get('bloghome',array('as'=>'bloghome','before'=>'auth','uses'=>'Homecontroller@getHome'));
Route::get('allblog',array('as'=>'allblog','before'=>'auth','uses'=>'blogcontroller@getblog'));
Route::get('newblog',array('as'=>'newblog','uses'=>'blogcontroller@newblog'));
Route::post('postblog',array('as'=>'postblog','uses'=>'blogcontroller@postblogmethod'));
Route::post('posteditblog',array('as'=>'posteditblog','uses'=>'blogcontroller@posteditblog'));
Route::get('readblog/{id}',array('as'=>'readblog','uses'=>'blogcontroller@readblog'));
Route::get('editblog/{id}',array('as'=>'editblog','uses'=>'blogcontroller@editblog'));
Route::get('deleteblog/{id}',array('as'=>'deleteblog','uses'=>'blogcontroller@deleteblog'));
Route::get('deleteblog/deleteit/{id}',array('as'=>'deleteit','uses'=>'blogcontroller@delblog'));

Route::get('getstudents/{id}','Auth\ProfileController@getstudents');

// Profile register
Route::get('createadminprofile','Auth\ProfileController@createadminprofile');
Route::post('createadminprofile','Auth\ProfileController@registeradminprofile');

Route::get('createprofile','Auth\ProfileController@createprofile');
Route::post('createprofile','Auth\ProfileController@registerprofile');


// display profile
Route::get('/adminprofile','Auth\ProfileController@adminprofile');
Route::get('/profile','Auth\ProfileController@profile');

//register

Route::get('courseregister','Auth\ProfileController@regindex');
Route::post('formregister/{id}','Auth\ProfileController@display');

Route::get('facultyregister/{id}','Auth\ProfileController@facregindex');
Route::post('facregister/{id}','Auth\ProfileController@facdisplay');

Route::get('fees','Homecontroller@getexams');




