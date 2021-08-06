<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamPlayerController;
use App\Http\Controllers\ProjectAuthorController;
use App\Http\Controllers\AuthorController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//PROJECTS
Route::apiResource('projects', ProjectController::class);
/* Estas lineas de codigo hacen lo mismo que las lineas de abajo */
// Route::prefix('project/{project}')->group(function () {
//     Route::patch('state',[ProjectsController::class,'updateState']);
// });

// Route::prefix('project/{project}')->group(function () {
//     Route::patch('{}/state',[ProjectsController::class,'updateState']);
// });

Route::prefix('project')->group(function () {
    Route::prefix('{project}')->group(function () {
        Route::patch('state', [ProjectController::class, 'updateState']);
    });
    Route::prefix('')->group(function () {
        Route::patch('state', [ProjectController::class, 'updateState']);
    });
});
//PROJECTS-AUTHORS
Route::apiResource('projects.authors', ProjectAuthorController::class);

Route::prefix('project/{project}/authors')->group(function () {
    Route::prefix('{author}')->group(function () {
        Route::patch('state', [ProjectAuthorController::class, 'updateState']);
    });
    Route::prefix('')->group(function () {
        Route::patch('state', [ProjectAuthorController::class, 'updateState']);
    });
});

<<<<<<< HEAD:routes/api/v1/public.php
//TEAMS-PLAYERS
Route::apiResource('teams/{team}/players', TeamPlayerController::class);
// Route::apiResource('teams.players', TeamsPlayersController::class);

Route::prefix('teams/{team}/player')->group(function () {
    Route::prefix('{player}')->group(function () {
        Route::patch('state', [TeamPlayerController::class, 'updateState']);
    });
    Route::prefix('')->group(function () {
        Route::patch('state', [TeamPlayerController::class, 'updateState']);
    });

});
=======
>>>>>>> f5c1f3f0da9668b8dcd04eadf565fa63be9453cc:routes/api/public.php
