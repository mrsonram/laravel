<?php

use App\Http\Controllers\ContactController;
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

//Pet Project
Route::resource('/', 'PetController');

Route::get('info', [PetController::class, 'info']);

Route::get('pet/show/{id}', [PetController::class, 'show']);

Route::get('/news', function () {
    return view('pet/news');
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

//Admin
Route::get('/manage', 'AdminController@index');

Route::get('/create', 'AdminController@create');

Route::post('/manage', 'AdminController@store');

Route::get('/manage/{id}', 'AdminController@show');

Route::get('/manage/{id}/edit', 'AdminController@edit');

Route::put('/manage/{id}', 'AdminController@update');

Route::delete('/manage/{id}', 'AdminController@destroy');

//Contact
Route::resource('contact', 'ContactController');

Route::get('/contact', 'ContactController@index');

Route::delete('/contact/{id}', 'ContactController@destroy');

//Manage
Route::resource('index', 'ManageController');

//PC (Contact Save Tester)
Route::resource('/pc', 'PCController');

//Login
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/manage', [App\Http\Controllers\AdminController::class, 'index'])->name('manage');
