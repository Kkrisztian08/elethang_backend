<?php

use App\Http\Controllers\Api\AdoptionTypeController;
use App\Http\Controllers\Api\AdoptionController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\CatController;
use App\Http\Controllers\Api\DogController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\ProgramapplicationController;
use App\Http\Controllers\Api\ProgramHourAndDayController;
use App\Http\Controllers\Api\ProgramTypeController;
use App\Http\Controllers\Api\UserController;
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

Route::apiResource('/admin', AdminController::class);
Route::apiResource('/adoption', AdoptionController::class);
Route::apiResource('/cat', CatController::class);
Route::apiResource('/dog', DogController::class);
Route::apiResource('/event', EventController::class);
Route::apiResource('/application', ProgramapplicationController::class);
Route::apiResource('/hourday', ProgramHourAndDayController::class);
Route::apiResource('/type', ProgramTypeController::class);
Route::apiResource('/user', UserController::class);
Route::apiResource('/adoptiontype', AdoptionTypeController::class);
