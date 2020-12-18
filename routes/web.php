<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Frontendcontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;




Route::get('/', function () {
    return view('Home/home');
});



Route::get('/home',[Frontendcontroller::class, 'home']);
Route::get('/in',[Frontendcontroller::class, 'index']);
Route::get('/ob',[Frontendcontroller::class, 'obj']);
Route::get('/ue',[Frontendcontroller::class, 'upe']);
Route::get('/p',[Frontendcontroller::class, 'pr']);
Route::get('/ss',[Frontendcontroller::class, 'sts']);

Route::get('/h1',[Frontendcontroller::class, 'h']);

Route::get('/lgn',[Frontendcontroller::class, 'log']);
Route::get('/sg',[Frontendcontroller::class, 'sgn']);

Route::get('/fp',[Frontendcontroller::class, 'fgp']);
Route::get('/a',[Frontendcontroller::class, 'a']);

Route::get('/admin',[Frontendcontroller::class, 'admin']);
Route::post('/waitfortheacceptance',[Frontendcontroller::class, 'wfa']);
Route::get('/waitfortheacceptance',[Frontendcontroller::class, 'wfa']);

Route::get('/admin/academic',[AdminController::class, 'aaca']);
Route::get('/admin/industrial',[AdminController::class, 'aind']);
Route::get('/admin/student',[AdminController::class, 'astu']);

Route::get('/',[LoginController::class,'index']);
Route::post('/checklogin',[LoginController::class,'checklogin']);
Route::get('/success',[LoginController::class,'successlogin']);
Route::get('/logout',[LoginController::class,'logout']);
 



