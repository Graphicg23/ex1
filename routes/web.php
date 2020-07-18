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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/user/{name}', function ($name) {
//     return "สวัสดี $name";
// });

// Route::get("/บวกเลย/{num1}/{num2}", function ($num1, $num2) {
//     return $num1 + $num2;
// });

// Route::get("/showdetail/{Nateekarn}/{age}/{Na}", function ($Nateekarn,$age,$At) {
//     return "สวัสดี $Nateekarn คุณมีอายุ $age ปี และคุณพูดว่า $At";

// Route::get('/','HomeController@index');
// Route::get('/greeting/{name}','HomeController@greeting');

// Route::get("/บวกเลข/{num1}/{num2}/{num3}",'HomeController@calcculator');

Route::get('/user', "UserController@index");
