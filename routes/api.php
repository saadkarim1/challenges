<?php

use App\Http\Controllers\PostController;
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

// Route::get('/posts', [PostController::class, 'index']);
// Route::post('/posts/create', [PostController::class, 'store']);
// Route::get('/posts/{id}', [PostController::class, 'show']);
// Route::put('/posts/edit/{id}', [PostController::class, 'update']);
// Route::delete('/posts/delete/{id}', [PostController::class, 'destroy']);

Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index');
    Route::post('/posts', 'store');
    Route::get('/posts/{id}', 'show');
    Route::put('/posts/{id}', 'update');
    Route::delete('/posts/{id}', 'delete');
    Route::put('/posts/edit-status/{id}', 'updateStatus');
});