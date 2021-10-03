<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\TesterController;
use App\Http\Controllers\AutoAddressController;
use App\Models\Pet;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

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

Route::get('news', [PetController::class, 'news']);

Route::get('map', [PetController::class, 'map']);

Route::get('pet/show/{id}', [PetController::class, 'show']);

Route::get('news/show/{id}', [PetController::class, 'message']);


Route::get('/about', function () {
    return view('pet/about');
});

Route::get('/administrator', function () {
    return view('admin/login');
});

//Route::get('/map', function () {
//    return view('pet/map');
//});

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

//News
Route::get('/message', 'NewsController@index');

Route::get('/message/create', 'NewsController@create');

Route::post('/message', 'NewsController@store');

Route::get('/message/{id}', 'NewsController@show');

Route::get('/message/{id}/edit', 'NewsController@edit');

Route::put('/message/{id}', 'NewsController@update');


//Manage
Route::resource('index', 'ManageController');

//PC (Contact Save Tester)
Route::resource('/pc', 'PCController');

//AutoAddressAPI
Route::get('/api', [AutoAddressController::class, 'googleAutoAddress']);


Route::get('gmaps', 'PetController@gmaps');

//Route::prefix('google-map')->group(function () {
    Route::get('/maps','GoogleMapController@index')->name('index');
    Route::post('/marks','GoogleMapController@store')->name('store');
//});

//Test Add Location
Route::get('google/add', function () {
    return view('google/app');
});

Route::post('/google/add', 'GoogleMapController@add');

Route::get('/google/{id}', 'GoogleMapController@show');


//Test
Route::get('/test/map', 'PetController@test');


//Login
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/manage', [App\Http\Controllers\AdminController::class, 'index'])->name('manage');
