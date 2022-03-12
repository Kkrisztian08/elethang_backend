<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminHomeController;

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
    return view('forPages.mainPage');
});
Route::get('/aboutUs', function () {
    return view('forPages.aboutUs');
});
Route::get('/cats', function () {
    return view('forPages.cats');
});
Route::get('/dogs', function () {
    return view('forPages.dogs');
});
Route::get('/donation', function () {
    return view('forPages.donation');
});
Route::get('/adoption', function () {
    return view('forPages.adoption');
});
Route::get('/mainPage', function () {
    return view('forPages.mainPage');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
