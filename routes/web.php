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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function(){
	Route::get("/admin", "AdminController@index")->name('admin_home');
	Route::post("/admin", "AdminController@post")->name('admin_home_p');
	Route::get("/admin/media", "AdminController@media")->name('admin_media');
	Route::get("/admin/links", "AdminController@links")->name('admin_links');
	Route::get("/link/{link}", "ShowController@show")->name('show');
	Route::get("/file", "ShowController@file")->name('file');
	Route::get("/ref", function(){
		session(['check' => 'aaadx']);
		return session('check');
	});
});
