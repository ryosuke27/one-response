<?php

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
    return redirect('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/archive', [App\Http\Controllers\ArchiveController::class, 'index'])->name('archive');
Route::post('/archive', [App\Http\Controllers\ArchiveController::class, 'update'])->name('archive.update');
Route::get('/message/{user_id?}/show', [App\Http\Controllers\MessageController::class, 'show'])->name('message.index');

Route::get('twitter', [App\Http\Controllers\TwitterController::class, 'index']);
Route::post('twitter', [App\Http\Controllers\TwitterController::class, 'tweet'])->name('twitter');