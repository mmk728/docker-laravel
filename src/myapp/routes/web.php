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

Route::get('/', function () {
    return view('index');
});
Route::get('/binding', function () {
    return view('binding');
});
Route::get('/if', function () {
    return view('if');
});
Route::get('/for', function () {
    return view('for');
});
Route::get('/reverse', function () {
    return view('reverse');
});
Route::get('/model', function () {
    return view('model');
});
Route::get('/component', function () {
    return view('component');
});
Route::get('/freeze', function () {
    return view('freeze');
});
Route::get('/watch', function () {
    return view('watch');
});
Route::get('/lifecycle', function () {
    return view('lifecycle');
});
Route::get('/once', function () {
    return view('once');
});
Route::get('/html', function () {
    return view('html');
});
