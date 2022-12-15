<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\RegisterController;
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
Route::redirect('/', '/worldwide');

Route::middleware(['guest'])->group(function () {
	Route::view('/signup', 'signup')->name('signup');
	Route::view('/login', 'login')->name('login');
	Route::post('/user/store', [RegisterController::class, 'store'])->name('user.store');
	Route::view('/forgot-password', 'components.forgot-password')->name('password.forgot');
	Route::post('/password-reset', [PasswordResetController::class, 'sendPasswordResetEmail'])->name('password.reset');
	Route::get('/user/{token}/password-reset', [PasswordResetController::class, 'edit'])->name('password.edit');
});

Route::middleware(['auth'])->group(function () {
	Route::post('/user/logout', [LogoutController::class, 'logout'])->name('user.logout');
	Route::get('/worldwide', [CountryController::class, 'worldwide'])->name('cases.worldwide');
	Route::get('/countries/{sort?}/{by?}', [CountryController::class, 'countries'])->name('cases.countries');
	Route::get('/country/search', [CountryController::class, 'search'])->name('country.search');
});

Route::post('/login', [LoginController::class, 'login'])->middleware(['verifiedUser'])->name('user.login');
Route::post('/user/{token}', [PasswordResetController::class, 'update'])->name('password.update');

Route::get('/change-locale/{locale}', [LocaleController::class, 'change'])->name('locale');
Route::get('/verify/{token}', [RegisterController::class, 'verifyUser'])->name('verify.user');