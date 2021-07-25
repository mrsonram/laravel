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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return '<h1>Test Web</h1>';
});

Route::get('/profile', 'ProfileController@index');

Route::get('/profile/create', 'ProfileController@create');

Route::get('/profile/{id}', 'ProfileController@show');

//Employee
Route::get('/employee', 'EmployeeController@index');

Route::get("/employee/create", "EmployeeController@create");

Route::post("/employee", "EmployeeController@store");

Route::get('/employee/{id}', 'EmployeeController@show');

Route::get("/employee/{id}/edit", "EmployeeController@edit");

Route::put("/employee/{id}", "EmployeeController@update");

Route::delete('/employee/{id}', 'EmployeeController@destroy');

//Position
Route::get('/position', 'PositionController@index');

Route::get('/position/{id}', 'PositionController@show');

//Boostrap
Route::get('/bootstrap', function () {
    return view('bootstrap/index');
});

Route::get('/test', function () {
    return view('bootstrap/test');
});

//Pet Project
Route::get('/pet', 'PetController@index');

Route::get('/news', function () {
    return view('pet/news');
});

Route::get('/info', function () {
    return view('pet/info');
});

Route::get('/about', function () {
    return view('pet/about');
});

Route::get('/login', function () {
    return view('admin/login');
});

//Admin
Route::get('/manage', 'AdminController@index');

Route::get('/create', 'AdminController@create');

Route::post('/manage', 'AdminController@store');

Route::get('/manage/{id}', 'AdminController@show');

Route::get('/manage/{id}/edit', 'AdminController@edit');

Route::put('/manage/{id}', 'AdminController@update');

Route::delete('/manage/{id}', 'AdminController@destroy');
