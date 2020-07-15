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

/*
|   BASE PLATFORM ROUTE.
*/
Route::get('/', function () {
    return view('login');
});


/*
|   USER LOGIN ROUTE.
*/
Route::post('/login','LoginController@postLogin');


/*
|   BASE LAYOUT ROUTE.
*/
Route::get('/base-layout','LayoutController@getIndex');
Route::post('/base-layout','LayoutController@postForm');