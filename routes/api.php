<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SearchController;

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

Route::post('/users/register', [UserController::class, 'register']);
Route::post('/users/login', [UserController::class, 'login']);
Route::post('/users/logout', [UserController::class, 'logout']);
Route::get('/users/{id}', [UserController::class, 'show']);

Route::get('/profiles/{id}', [ProfileController::class, 'show']);
Route::put('/profiles/{id}', [ProfileController::class, 'update']);

Route::get('/notifications/{userId}', [NotificationController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts/{id}', [PostController::class, 'destroy']);

Route::get('/comments/{postId}', [CommentController::class, 'index']);
Route::post('/comments', [CommentController::class, 'store']);

Route::post('/likes', [LikeController::class, 'store']);

Route::get('/search', [SearchController::class, 'search']);

// Route::post('/users/register', [UserController::class, 'register']);
// Route::post('/users/login', [UserController::class, 'login']);

// Route::middleware('auth:sanctum')->group(function () {
//     Route::post('/users/logout', [UserController::class, 'logout']);
//     Route::get('/users/{id}', [UserController::class, 'show']);

//     Route::get('/profiles/{id}', [ProfileController::class, 'show']);
//     Route::put('/profiles/{id}', [ProfileController::class, 'update']);

//     Route::get('/notifications/{userId}', [NotificationController::class, 'index']);

//     Route::post('/posts', [PostController::class, 'store']);
//     Route::delete('/posts/{id}', [PostController::class, 'destroy']);

//     Route::post('/comments', [CommentController::class, 'store']);
//     Route::post('/likes', [LikeController::class, 'store']);
// });

// Route::get('/posts', [PostController::class, 'index']);
// Route::get('/comments/{postId}', [CommentController::class, 'index']);
// Route::get('/search', [SearchController::class, 'search']);
