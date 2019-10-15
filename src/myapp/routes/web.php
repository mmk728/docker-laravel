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
Route::get('/bind', function () {
    return view('bind');
});
Route::get('/method_computed', function () {
    return view('method_computed');
});
Route::get('/watch_computed', function () {
    return view('watch_computed');
});
Route::get('/setter', function () {
    return view('setter');
});
Route::get('/watch_model', function () {
    return view('watch_model');
});
Route::get('/class_binding', function () {
    return view('class_binding');
});
Route::get('/component_binding', function () {
    return view('component_binding');
});
Route::get('/style_binding', function () {
    return view('style_binding');
});
Route::get('/if_else', function () {
    return view('if_else');
});
Route::get('/show', function () {
    return view('show');
});
Route::get('/for2', function () {
    return view('for2');
});
Route::get('/object_for', function () {
    return view('object_for');
});
Route::get('/todo', function () {
    return view('todo');
});
