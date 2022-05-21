<?php

use App\Http\Controllers\comController;
use App\Http\Controllers\empController;
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

//--------employee------

Route::get('/empRead',[empController::class,'empRead'])->name('empRead')->middleware('mbm');

Route::get('/empWriteView',[empController::class,'empWriteView'])->name('empWriteView')->middleware('mbm');
Route::post('/empWriteView_submit',[empController::class,'empWriteView_submit'])->name('empWriteView_submit')->middleware('mbm');

Route::get('/empEditView/{id}',[empController::class,'empEditView'])->name('empEditView')->middleware('mbm');
//Route::post('/adminEditSubmit',[empController::class,'adminEditSubmit'])->name('adminEditSubmit');
Route::post('/empEditView_submit',[empController::class,'empEditView_submit'])->name('empEditView_submit')->middleware('mbm');

Route::get('/empDelete/{id}',[empController::class,'empDelete'])->name('empDelete')->middleware('mbm');



//--------company------
Route::get('/comRead',[comController::class,'comRead'])->name('comRead')->middleware('mbm');

Route::get('/comWriteView',[comController::class,'comWriteView'])->name('comWriteView')->middleware('mbm');
Route::post('/comWriteView_submit',[comController::class,'comWriteView_submit'])->name('comWriteView_submit')->middleware('mbm');

Route::get('/comEditView/{id}',[comController::class,'comEditView'])->name('comEditView')->middleware('mbm');
//Route::post('/adminEditSubmit',[comController::class,'adminEditSubmit'])->name('adminEditSubmit');
Route::post('/comEditView_submit',[comController::class,'comEditView_submit'])->name('comEditView_submit')->middleware('mbm');

Route::get('/comDelete/{id}',[comController::class,'comDelete'])->name('comDelete')->middleware('mbm');


//--------login------
Route::get('/login',[empController::class,'login'])->name('login');
Route::post('/login_submit',[empController::class,'login_submit'])->name('login_submit');

Route::get('/logout',[empController::class,'logout'])->name('logout');

