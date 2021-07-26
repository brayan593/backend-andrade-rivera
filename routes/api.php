<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;


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

/* Route::get('projects',function (){
   $projects = ['project1','project2','project3'];
   return response()->json(
      ['data'=> $projects,
      'msg'=>['sumary'=> 'consulta correcta',
      'detail'=>'la consulta esta correcta', 
      'code'=>'201']], 201
   );
 });
 Route::get('projects/{project}',function (){
   $project = 'project1';
   return response()->json(
      ['data'=> $project,
      'msg'=>['sumary'=> 'consulta correcta',
      'detail'=>'la consulta esta correcta', 
      'code'=>'200']], 200
   );
 });
 Route::put('projects/{project}',function (){
   $project = 'project1';
   return response()->json(
      [  'data' => null,
      'msg' => [
      'summary' => 'Actualizado correctamente',
      'detail' => 'EL proyecto se actualizó correctamente',
      'code' => '201']], 201
   );
 });
 Route::delete('projects/{project}',function (){
   return response()->json(
      ['data'=> null,
      'msg' => [
      'summary' => 'Eliminado correctamente',
      'detail' => 'EL proyecto se eliminó correctamente',
      'code' => '201']], 201
   );
 });
 Route::post('projects',function (){
   return response()->json(
      ['data'=> null,
      'msg' => [
      'summary' => 'Creado correctamente',
      'detail' => 'El proyecto se creo correctamente',
      'code' => '201']], 201
   );
 });



 Route::get('offices/{office}/employees',function (){
   return ['ofice1, Pao','ofice2, Pancho'];
});
Route::get('offices/{office}/employees/{employee}',function (){
   return 'ofice1, Pao';
});
Route::put('offices/{office}/employees/{employee}',function (){
   return 'actualizado';
});
Route::delete('offices/{office}/employees/{employee}',function (){
   return 'eliminado';
});
Route::post('offices/{office}/employees',function (){
   return 'guardado';
}); */

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