<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NdController;
use App\Http\Controllers\ProductsController;

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
    return view('welcome');
});
Route::get('register', [UserController::class, 'register'])->name(name:'dky');
Route::post('register', [UserController::class, 'fromSumbit'])->name(name:'register');
Route::get('Login', [UserController::class, 'Login'])->name(name:'dkn');
Route::post('Login', [UserController::class, 'fromLogin'])->name(name:'Login');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
// Route::get('index', [UserController::class, 'index'])->name(name:'index');
Route::get('Update/{id}', [UserController::class, 'Update'])->name('up');
Route::post('Update/{id}', [UserController::class, 'fromUpdate'])->name('Update');
Route::get('Admin', [UserController::class, 'Admin'])->name(name:'Admin');
Route::get('delete/{id}', [UserController::class, 'delete'])->name(name:'delete');
Route::post('store', [UserController::class, 'store'])->name(name:'store');
Route::get('Reset', [UserController::class, 'Reset']);
Route::post('Reset', [UserController::class, 'fromReset'])->name(name:'password.link');

Route::get('Admin/user', [UserController::class, 'User'])->name(name:'User');


Route::get('from', [NdController::class, 'form_basic'])->name(name:'from');
// Route::get('Content', [NdController::class, 'nd'])->name('Content');
Route::post('Content/ndstore', [NdController::class, 'ndstore'])->name(name:'ndstore');
Route::get('Content', [NdController::class, 'ndindex'])->name(name:'ndindex');
Route::get('Content/delete/{id}', [NdController::class, 'nddelete'])->name(name:'nddelete');
Route::get('Content/Update/{id}', [NdController::class, 'ndUpdate'])->name('ndup');
Route::post('Content/Update/{id}', [NdController::class, 'ndfromUpdate'])->name('ndUpdate');
Route::get('Content/{id}', [NdController::class, 'ndSee']);
Route::get('Content/{id}', [NdController::class, 'ndfromSee'])->name('ndSee');
Route::post('Content/comment', [NdController::class, 'blfromSee'])->name('blSee');

// Route::get('Content/id', [NdController::class, 'test'])->name('test');


Route::prefix('Home')->group(function () {
    Route::get('/', [ProductsController::class, 'Home'])->name('home');
});