<?php

use App\Http\Controllers\ImageUploadController;
use Illuminate\Support\Facades\Route;
use App\Models\Cat;
use App\Models\Dog;
use App\Models\Postimage;
use App\Models\Programapplication;
use App\Models\ProgramInfo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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




//For adding an image
Route::get('/pictures', [ImageUploadController::class, 'addImage'])->name('imagesadd');

//For storing an image
Route::post('/pictures', [ImageUploadController::class, 'storeImage'])
    ->name('images.store');

//For deleting an image
Route::delete("/pictures", [ImageUploadController::class, "deleteImage"])->name("delete");


//For showing an image
//Route::get('/pictures',[ImageUploadController::class,'viewImage'])->name('images.view');




Route::get('/', function () {
    $imageData = Postimage::all();
    $dogs = Dog::all();
    $cats = Cat::all();
    $users = User::all();
    return view('forPages.mainPage', compact('imageData', 'dogs', 'cats', 'users'));
});


Route::get('/profile', function () {
    return view('forPages.profile');
});





Route::get('/programs', function () {
    $apps = Programapplication::all();
    $infos = ProgramInfo::all();
    return view('forPages.programs', compact('apps', 'infos'));
});
/*Route::get('/pictures', function () {
    $imageData= Postimage::all();
    return view('forPages.pictures', compact('imageData'));
});*/

Route::get('/aboutUs', function () {
    return view('forPages.aboutUs');
});



Route::get('/cats', function () {
    $cats = Cat::all();
    return view('forPages.cats', compact('cats'));
});
Route::get('/cats/{cat}', function ($cat) {
    $cat = Cat::find($cat);
    return view('forPages.oneAnimal.cat', compact('cat'));
});

Route::get('/dogs', function () {
    $dogs = Dog::all();
    return view('forPages.dogs', compact('dogs'));
});
Route::get('/dogs/{dog}', function ($dog) {
    $dog = Dog::find($dog);
    return view('forPages.oneAnimal.dog', compact('dog'));
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
