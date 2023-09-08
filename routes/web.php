<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user1controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/member', function () {
    return view('/Auth/member');
});
Route::view('/home','Auth/home');
Route::view('about','about');
Route::view('member1','Auth/member');
Route::view('register','register');
Route::view('login','log');
Route::view('explore','Auth/explore');
Route::post('reg',[user1controller::class,'reg'])->name('reg');
Route::post('log1',[user1controller::class,'log'])->name('log1');

//Route::get('pdf',[user1controller::class,'pdf']);
Route::get('login2',[user1controller::class,'googleReg'])->name('login2');
Route::any('auth/google/callback',[user1controller::class,'googleRegWith'])->name('callback');
Route::post('memeber',[user1controller::class,'member'])->name('member');