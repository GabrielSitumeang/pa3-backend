<?php

use App\Models\Pupuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TanamansController;
use App\Http\Controllers\API\PupuksController;
use App\Http\Controllers\API\HamaController;
use App\Http\Controllers\API\Budidaya\PemantauansController;
use App\Http\Controllers\API\Budidaya\IrigasiController;
use App\Http\Controllers\API\Budidaya\PanenController;
use App\Http\Controllers\API\Budidaya\PascaPanenController;
use App\Http\Controllers\API\Budidaya\PenanamanController;
use App\Http\Controllers\API\Budidaya\PersiapanLahanController;
use App\Http\Controllers\API\Budidaya\RotasiTanamanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\AjukanController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function() {

    // User
    Route::get('/user', [AuthController::class, 'user']);
    Route::put('/user', [AuthController::class, 'update']);
    Route::post('/logout', [AuthController::class, 'logout']);

    // Post
    Route::get('/posts', [PostController::class, 'index']); // all posts
    Route::post('/posts', [PostController::class, 'store']); // create post
    Route::get('/posts/{id}', [PostController::class, 'show']); // get single post
    Route::put('/posts/{id}', [PostController::class, 'update']); // update post
    Route::delete('/posts/{id}', [PostController::class, 'destroy']); // delete post

    // Comment
    Route::get('/posts/{id}/comments', [CommentController::class, 'index']); // all comments of a post
    Route::post('/posts/{id}/comments', [CommentController::class, 'store']); // create comment on a post
    Route::put('/comments/{id}', [CommentController::class, 'update']); // update a comment
    Route::delete('/comments/{id}', [CommentController::class, 'destroy']); // delete a comment

    // Like
    Route::post('/posts/{id}/likes', [LikeController::class, 'likeOrUnlike']); // like or dislike back a post

    
});

Route::resource('tanaman', TanamansController::class);

Route::resource('pupuk', PupuksController::class);

Route::resource('pemantauan', PemantauansController::class);

Route::resource('irigasi', IrigasiController::class);

Route::resource('panen', PanenController::class);

Route::resource('pascapanen', PascaPanenController::class);

Route::resource('penanaman', PenanamanController::class);

Route::resource('persiapan', PersiapanLahanController::class);

Route::resource('rotasitanaman', RotasiTanamanController::class);

Route::resource('hama', HamaController::class);

;