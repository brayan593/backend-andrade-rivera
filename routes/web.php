<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatrolsPolicemanController;

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

Route::apiResource('projects',ProjectsController::class);

Route::prefix('project')->group(function () {
    Route::prefix('{project}')->group(function () {
        Route::patch('state',[ProjectsController::class,'updateState']);
    });
    Route::prefix('')->group(function () {
        Route::patch('state',[ProjectsController::class,'updateState']);
    });
}); 

Route::apiResource('patrols/{patrol}/cops',PatrolsPolicemanController::class);

Route::apiResource('patrol/{patrol}/policeman',PatrolsPolicemanController::class);

Route::prefix('patrol/{patrol}/policeman/{policeman}')->group(function () {
   Route::patch('state',[PatrolsPolicemanController::class,'updateState']);
});