<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\TravelsController;
use App\Http\Controllers\DetailsController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\UserController;
use App\Http\Controllers\VehiclesController;

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

Route::apiResource('users', UserController::class);
Route::apiResource('payments', PaymentsController::class);
Route::apiResource('clients', ClientsController::class);
Route::apiResource('drivers', DriversController::class);
Route::apiResource('travels', TravelsController::class);
Route::apiResource('roles', RolesController::class);
Route::apiResource('details', DetailsController::class);
Route::apiResource('vehicles', VehiclesController::class);


