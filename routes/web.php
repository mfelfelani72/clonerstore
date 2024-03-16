<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();



Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])
->name('dashboard');

Route::get('/{locale}', function ($locale) {

    session()->put('locale', $locale);

    return redirect()->back();
})->name('lang');

