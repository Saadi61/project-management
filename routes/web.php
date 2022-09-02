<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');

// Projects

Route::get('/createproject',[ProjectController::class, 'index'])->name('createproject');

Route::POST('/store',[ProjectController::class, 'store'])->name('store');





// Tasks

Route::POST('/storetask',[ProjectController::class, 'storetask'])->name('storetask');

Route::get('/createtask/{project}',[ProjectController::class, 'task'])->name('createtask');

//invites


Route::get('/invite', [UsersController::class,'invite_view'])->name('invite_view');

Route::post('/invite', [UsersController::class,'process_invites'])->name('process_invite');

Route::get('/registration/{token}', [UsersController::class,'registration_view'])->name('registration');

//Route::POST('/registration', [Auth\RegisterController::class,'classregister'])->name('accept');







