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

/*
Route::get('/', function () {
//    return view('welcome');
//    return 'Hello World!';
    return view('index');
});

Route::get('/about',function(){
    $name = 'Sandhika Galih';
    return view('about',['name' => $name]);

//    return view('about');
});

*/

// php artisan make:controller MahasiswaController --resource

Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/mahasiswa','MahasiswaController@index');

