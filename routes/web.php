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

Route::get('/fat', function () {
    return view('fat');
});

Route::get('/fay', function () {
    return view('fay');
});

Route::get('/mick', function () {
    return view('mick');
});

Route::get('/val', function () {
    return view('val');
});

Route::fallback(function() {
   return view('404'); // la vue
});
