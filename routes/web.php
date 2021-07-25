<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('projects',function (){
    return ['proyecto1','proyecto2'];
 });
 Route::get('projects',function (){
    return ['proyecto1'];
 });
 Route::put('projects',function (){
    return ['proyecto1'];
 });
 Route::delete('projects',function (){
    return ['proyecto1'];
 });
 Route::post('projects',function (){
    return ['proyecto1'];
 });