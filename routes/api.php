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
