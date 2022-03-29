<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\DogController;
use App\Models\Cat;
use App\Models\Dog;
use App\Models\Programapplication;
use App\Models\ProgramHourAndDay;
use App\Models\ProgramType;
use App\Models\User;

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
    $dogs =Dog::all();
    $cats = Cat::all();
    $users = User::all();
    return view('forPages.mainPage',compact('dogs','cats','users'));

});


Route::get('/profile', function () {
    return view('forPages.profile');
});
Route::get('/programs', function () {
    $apps =Programapplication::all();
    $times =ProgramHourAndDay::all();
    $types =ProgramType::all();
    return view('forPages.programs',compact('apps','times','types'));
});
Route::get('/pictures', function () {
    return view('forPages.pictures');
});

Route::get('/aboutUs', function () {
    return view('forPages.aboutUs');
});



Route::get('/cats', function () {
    $cats = Cat::all();
    return view('forPages.cats',compact('cats'));
});
Route::get('/cats/{cat}', function ($cat) {
    $cat = Cat::find($cat);
    return view('forPages.oneAnimal.cat',compact('cat'));
});

Route::get('/dogs', function () {
    $dogs =Dog::all();
    return view('forPages.dogs',compact('dogs'));
});
Route::get('/dogs/{dog}', function ($dog) {
    $dog = Dog::find($dog);
    return view('forPages.oneAnimal.dog',compact('dog'));
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
