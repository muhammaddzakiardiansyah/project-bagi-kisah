<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StoryController;
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

Route::get('/register', [AuthController::class, 'pageRegister'])->name('page register');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'loginPage'])->name('page login');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/dashboard' , [StoryController::class, 'dashboardPage'])->name('page dashboard');
Route::get('/buat-cerita', [StoryController::class, 'createStoryPage'])->name('page create story');
Route::get('/edit-cerita', [StoryController::class, 'editStoryPage'])->name('page edit story');
