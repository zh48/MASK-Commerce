<?php

use App\Http\Controllers\BackEnd\BackEndController as BackEndBackEndController;
use App\Http\Controllers\FrontEnd\FrontEndController as FrontEndFrontEndController;
use App\Http\Controllers\FrontEnd\FrontEndController;
use App\Http\Controllers\BacktEnd\BackEndController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/',[FrontEndController::class, 'index'] )->name('FrontEnd.index');
Route::get('/cart',[FrontEndController::class, 'cart'] )->name('FrontEnd.cart');
Route::get('/checkout',[FrontEndController::class, 'checkout'] )->name('FrontEnd.checkout');
Route::get('/detail',[FrontEndController::class, 'detail'] )->name('FrontEnd.detail');
Route::get('/shop',[FrontEndController::class, 'shop'] )->name('FrontEnd.shop');

Route::get('/admin/index',[BackEndBackEndController::class, 'Index'] )->name('BackEnd.index');
Route::get('/admin/login',[BackEndBackEndController::class, 'Login'] )->name('BackEnd.login');
Route::get('/admin/blank',[BackEndBackEndController::class, 'Blank'] )->name('BackEnd.blank');
Route::get('/admin/forgot-password',[BackEndBackEndController::class, 'Forgot_Password'] )->name('BackEnd.forgot_password');

Auth::routes(['verif' => true]);


