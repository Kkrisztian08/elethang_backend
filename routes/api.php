<?php

use App\Http\Controllers\Api\AdoptionTypeController;
use App\Http\Controllers\Api\AdoptionController;
use App\Http\Controllers\Api\CatController;
use App\Http\Controllers\Api\DogController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\ProgramapplicationController;
use App\Http\Controllers\Api\ProgramInfoController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\Statistic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('/adoption', AdoptionController::class);
Route::apiResource('/cat', CatController::class);
Route::apiResource('/dog', DogController::class);
Route::apiResource('/event', EventController::class);
Route::apiResource('/application', ProgramapplicationController::class);
Route::apiResource('/programinfo', ProgramInfoController::class);
Route::apiResource('/users', UserController::class);
Route::apiResource('/adoptiontype', AdoptionTypeController::class);

Route::get('/user_count',[Statistic::class,'getUserCount']);
Route::get('/admin_count',[Statistic::class,'getAdminCount']);
Route::get('/super_admin_count',[Statistic::class,'getSuperAdminCount']);
Route::get('/dog_count',[Statistic::class,'getDogCount']);
Route::get('/cat_count',[Statistic::class,'getCatCount']);
Route::get('/adopted_cat_count',[Statistic::class,'getAdoptedCatCount']);
Route::get('/not_adopted_cat_count',[Statistic::class,'getNotAdoptedCatCount']);
Route::get('/adopted_dog_count',[Statistic::class,'getAdoptedDogCount']);
Route::get('/not_adopted_dog_count',[Statistic::class,'getNotAdoptedDogCount']);

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'store']);

Route::post('/dogAdoption/{id}',[AdoptionController::class,'storeDogAdoption']);
Route::post('/catAdoption/{id}',[AdoptionController::class,'storeCatAdoption']);

Route::put('/adminPermission/{id}', [UserController::class, 'adminJog']);
Route::put('/adminPermissionGone/{id}', [UserController::class, 'adminJogElvesz']);

//örökbefogadás MACSKA(Auth)
Route::middleware('auth:sanctum')->post('/catAdoptionLoggedin/{id}',[AdoptionController::class,'storeCatAdoptionLoggedin']);
//örökbefogadás KUTYA(Auth)
Route::middleware('auth:sanctum')->post('/dogAdoptionLoggedin/{id}',[AdoptionController::class,'storeDogAdoptionLoggedin']);
//jelentkezés(Auth)
Route::middleware('auth:sanctum')->post('/storeProgramApplication',[ProgramapplicationController::class,'storeProgramApplication']);
//adott felhasználó programjelentkezést
Route::middleware('auth:sanctum')->get('/showApplication',[ProgramapplicationController::class,'showApplication']);

Route::delete('/deleteProgramApplication/{id}',[ProgramapplicationController::class, 'destroy']);

Route::middleware('auth:sanctum')->put('/updateSelf',[UserController::class, 'updateSelf']);