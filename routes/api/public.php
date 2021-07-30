<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\OfficesEmployeesController;
use App\Http\Controllers\PatrolsPolicemanController;
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
//para una sola forma
/* Route::apiResource('projects',ProjectsController::class);

Route::prefix('project/{project}')->group(function () {
   Route::patch('state',[ProjectsController::class,'updateState']);
}); */

//para las dos formas
 Route::apiResource('projects',ProjectsController::class);

Route::prefix('project')->group(function () {
    Route::prefix('{project}')->group(function () {
        Route::patch('state',[ProjectsController::class,'updateState']);
    });
    Route::prefix('')->group(function () {
        Route::patch('state',[ProjectsController::class,'updateState']);
    });
}); 

 Route::apiResource('offices.employees',OfficesEmployeesController::class);

/*
Route::prefix('office/{office}/employee/{employee}')->group(function () {
   Route::patch('state',[OfficesEmployeesController::class,'updateState']);
}); */

Route::prefix('office/{office}/employees')->group(function () {
    Route::prefix('{employee}')->group(function () {
        Route::patch('state',[OfficesEmployeesController::class,'updateState']);
    });
    Route::prefix('')->group(function () {
        Route::patch('state',[OfficesEmployeesController::class,'updateState']);
    });
}); 