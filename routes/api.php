<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Models\CustomerInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/greeting', function () {
    return ['wishes' => 'welcome to laravel'];
});

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/
Route::get('/users/{name?}', [UserController::class, 'index'])->whereAlphaNumeric('name');
Route::get('/users/{id}', function (string $id) {
    return 'User '.$id;
});
Route::get('/posts/{post}/comments/{comment}', function (Request $request, string $postId, string $commentId) {
    return 'PostId '.$postId. ' '. 'CommendId '. $commentId. 'Request params'. $request->getRequestUri();
});
Route::post('/users', [UserController::class, 'create']);
Route::put('/users', [UserController::class, 'any']);
Route::patch('/users', [UserController::class, 'any']);
Route::delete('/users', [UserController::class, 'any']);

Route::controller(UserController::class)->group(function () {
    Route::post('/users', 'create');
    Route::put('/users', 'any');
    Route::patch('/users', 'any');
    Route::delete('/users', 'any');
});
//Route::match(['put', 'patch', 'delete'], '/users', [UserController::class, 'any']);
Route::get('/posts/{id}', function (string $id) {
    return 'Post '.$id;
});

Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/customers/1', [CustomerController::class, 'create']);
Route::post('/customers', [CustomerController::class, 'any']);
