<?php

use App\Http\Controllers\Auth\ForgetPassword;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\News\NewsContoller;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Dashboard\HomeController;

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
Route::view('/', 'dashboard.app.auth.register');

// Handle registration
Route::get('/registerPage', [RegisterController::class, 'index'])->name('register_page');

Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Forget Password..
Route::get('/forget/password',[ForgetPassword::class,'index'])->name('forget_password');

// Redirect to the login page
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginStore', [LoginController::class, 'loginStore'])->name('loginStore');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {

    // Dashboard home page
    Route::get('/home', [HomeController::class, 'home'])->name('home');

    // Logout route
    Route::get('/logout', [LoginController::class, 'logOut'])->name('logout');

    // Resourceful route for news
    Route::resource('news', NewsContoller::class);
});

