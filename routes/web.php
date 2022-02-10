<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/services', function () {
    return view('services.index');
})->name('services');

Route::get('/services/fabric-maintenance', function () {
    return view('services.fabric');
})->name('fabric');

Route::get('/services/structure-building-repairs', function () {
    return view('services.structure');
})->name('structure');

Route::get('/services/high-rise-building-glass-cleaning', function () {
    return view('services.highrise');
})->name('highrise');

Route::get('/services/pressure-cleaning', function () {
    return view('services.pressure');
})->name('pressure');


Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

Route::resource('users', UserController::class);
Route::resource('messages', ContactController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
