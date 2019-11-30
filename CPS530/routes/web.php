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
    return view('page1');
});

Route::get('/home', function () {
	    return view('page1');
})->name('home');

Route::get('/installation', function () {
	    return view('page2');
})->name('installation');

Route::get('/tutorial', function () {
	    return view('page3');
})->name('tutorial');

Route::get('/demo', function () {
	    return view('page4');
})->name('demo');

Route::get('/experience', function () {
	    return view('page5');
})->name('experience');

Route::get('/credits', function () {
	    return view('page6');
})->name('credits');
