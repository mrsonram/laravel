<?php

use App\Http\Controllers\PetController;
use App\Http\Controllers\TesterController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'PetController@index');

//Route::get('/home', function () {
//    return '<h1>Test Web</h1>';
//});

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
Route::get('pet/show/{id}', [PetController::class, 'show']);


Route::get('/news', function () {
    return view('pet/news');
});

Route::get('/info', function () {
    return view('pet/info');
});

Route::get('/about', function () {
    return view('pet/about');
});

Route::get('/administrator', function () {
    return view('admin/login');
});

Route::get('/map', function () {
    return view('pet/map');
});

Route::get('/pet/{id}', 'PetController@show');

//Admin
Route::get('/manage', 'AdminController@index');

Route::get('/create', 'AdminController@create');

Route::post('/manage', 'AdminController@store');

Route::get('/manage/{id}', 'AdminController@show');

Route::get('/manage/{id}/edit', 'AdminController@edit');

Route::put('/manage/{id}', 'AdminController@update');

Route::delete('/manage/{id}', 'AdminController@destroy');

Route::get('/post', function () {
    return view('admin/dashboard');
});

//Manage
Route::resource('index', 'ManageController');

//Tester
Route::get('/tester/home',[TesterController::class,'index']);
Route::get('tester/read',[TesterController::class,'read']);
Route::get('tester/create',[TesterController::class,'create']);
Route::get('tester/store',[TesterController::class,'store']);
Route::get('tester/show/{id}',[TesterController::class,'show']);
Route::get('tester/update/{id}',[TesterController::class,'update']);
Route::get('tester/destroy/{id}',[TesterController::class,'destroy']);

//Login
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/manage', [App\Http\Controllers\AdminController::class, 'index'])->name('manage');
