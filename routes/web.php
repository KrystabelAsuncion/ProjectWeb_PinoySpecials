<?php


use App\Http\Controllers\Auth\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterCtrl;
use App\Http\Controllers\Auth\PostsController;
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
    return view('Auth.register');
});


Route::get('/register', [LoginRegisterCtrl::class, 'register'])->name('register');
Route::post('/store', [LoginRegisterCtrl::class, 'store'])->name('store');
Route::get('/login', [LoginRegisterCtrl::class, 'login'])->name('login');
Route::post('/authenticate', [LoginRegisterCtrl::class, 'authenticate'])->name('authenticate');

Route::get('/dashboard', [LoginRegisterCtrl::class, 'dashboard'])->name('dashboard');

Route::post('/logout', [LoginRegisterCtrl::class, 'logout'])->name('logout');
Route::get('/guest-dashboard', [LoginRegisterCtrl::class, 'guestDashboard'])->name('guest-dashboard');
Route::get('/forgot-password', [LoginRegisterCtrl::class, 'forgotPassword'])->name('forgotPassword');

// Forgot password routes
Route::get('forgot-password', [LoginRegisterCtrl::class, 'forgotPasswordForm'])->name('password.request');
Route::post('forgot-password', [LoginRegisterCtrl::class, 'forgotPassword'])->name('password.username');

// Reset password routes
Route::get('reset-password/{token}', [LoginRegisterCtrl::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('reset-password', [LoginRegisterCtrl::class, 'resetPassword'])->name('password.update');

Route::get('/recipe{id)', [PostsController::class, 'recipe_view'])->name('recipe_view');
Route::get('/recipes/category/{category}', [PostsController::class, 'getBreakfastRecipes']);
