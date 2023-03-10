<?php

use App\Http\Controllers\concontroller;
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

Route::get('/',[concontroller::class,'index']);
Route::get('/bootstrap',[concontroller::class,'boot']);
Route::get('/admin',[concontroller::class,'admin']);
Route::post('/admin',[concontroller::class,'add'])->name('add');
Route::get('/nnew/{category}',[concontroller::class,'ard']);
Route::get('nnew/go/{id}',[concontroller::class,'go']);
Route::get('/search',[concontroller::class,'search'])->name('search');