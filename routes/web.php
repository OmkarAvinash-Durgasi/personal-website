<?php

use App\Http\Controllers\HomeController;
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

<<<<<<< HEAD
<<<<<<< HEAD
//Route::get('/', [HomeController::class, 'index'])->name('homeWebController');
=======
Route::get('/', [HomeController::class, 'index'])->name('homeWebController');
>>>>>>> 8ee643196e28ba1f29c3d7cc2de4588127c999ec
=======
Route::get('/', [HomeController::class, 'index'])->name('homeWebController');
>>>>>>> 8ee643196e28ba1f29c3d7cc2de4588127c999ec

Route::get('/welcome', function () {
    return redirect()->route('greetWebController');
})->name('welcomeWebController');

Route::get('/greet', function () {
    return 'Hello World greeting';
})->name('greetWebController');

//Route::redirect('/welcome', '/greet', 301);
//Route::permanentRedirect('/welcome', '/greet');
