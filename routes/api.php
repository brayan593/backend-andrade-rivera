<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('projects',function (){
    return ['proyecto1','proyecto2'];
 });
 Route::get('projects/{project}',function (){
    return 'proyecto1';
 });
 Route::put('projects/{project}',function (){
    return 'actualizado';
 });
 Route::delete('projects/{project}',function (){
    return 'eliminado';
 });
 Route::post('projects',function (){
    return 'guardado';
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
 });