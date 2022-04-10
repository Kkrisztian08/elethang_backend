<?php

use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\ImageUploadController;
use Illuminate\Support\Facades\Route;
use App\Models\Cat;
use App\Models\Dog;
use App\Models\Postimage;
use App\Models\Programapplication;
use App\Models\ProgramInfo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    $imageData = Postimage::all();
    $dogs = Dog::all();
    $cats = Cat::all();
    $users = User::all();
    return view('forPages.mainPage', compact('imageData', 'dogs', 'cats', 'users'));
});


Route::get('/donation', function () {
    return view('forPages.donation');
});


Route::get('/adoption', function () {
    return view('forPages.adoption');
});

Route::get('/cats', function () {
    $cats = Cat::all();
    return view('forPages.cats', compact('cats'));
});
Route::get('/cats/{cat}', function ($cat) {
    $cat = Cat::find($cat);
    return view('forPages.oneAnimal.cat', compact('cat'));
});
Route::post('/cats/{cat}',[AdoptionController::class,'store'])->name('store');

Route::get('/dogs', function () {
    $dogs = Dog::all();
    return view('forPages.dogs', compact('dogs'));
});
Route::get('/dogs/{dog}', function ($dog) {
    $dog = Dog::find($dog);
    return view('forPages.oneAnimal.dog', compact('dog'));
});
Route::post('/dogs/{dog}',[AdoptionController::class,'dogStore'])->name('dogStore');


Route::get('/aboutUs', function () {
    return view('forPages.aboutUs');
});


Route::get('/profile', function () {
    return view('forPages.profile');
});

Route::get('/pictures', [ImageUploadController::class, 'addImage'])->name('imagesadd');
Route::post('/pictures', [ImageUploadController::class, 'storeImage'])
    ->name('images.store');
Route::delete("/pictures", [ImageUploadController::class, "deleteImage"])->name("delete");
Route::patch("/pictures", [ImageUploadController::class, "editImage"])->name("editImage");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
