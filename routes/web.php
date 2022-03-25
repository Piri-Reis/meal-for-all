<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Client\Request;
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

Route::get('user/login', function () {
    return view('users.login');
})->name('login');

Route::get('user/create', function () {
    return view('users.create');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('user', UserController::class);

    Route::get('beneficiaries', function (){
        return view('beneficiaries.index');
    })->name('beneficiaries');

    Route::get('checking', function (){
        return view('checking.index');
    })->name('checking');

    Route::get('logout', function (){
        Auth::logout();
        return redirect('/');
    })->name('logout');
});
