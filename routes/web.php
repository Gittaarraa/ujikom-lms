<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\NewsController;
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
    return view('home');
})->middleware(['auth'])->name('home');

Route::middleware(['auth'])->group(function() {
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/class', [KelasController::class, 'index'])->name('class');
    Route::get('/news', [NewsController::class, 'index'])->name('news');
});

require __DIR__.'/auth.php';
