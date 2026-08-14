<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\MusicApiController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello', function (Request $request) {
    return "Olá mundo!";
});

Route::get('/musics', [MusicApiController::class, 'index'] );
Route::post('/musics', [MusicApiController::class, 'store'] );
Route::put('/musics/{id}', [MusicApiController::class, 'update'] );
Route::delete('/musics/{id}', [MusicApiController::class, 'destroy'] );

Route::get('/albuns', [AlbumController::class,'index'] );
Route::post('/albuns', [AlbumController::class,'store'] );
Route::get('/albuns/{album}', [AlbumController::class,'show'] );
Route::put('/albuns/{album}', [AlbumController::class,'update'] );
Route::delete('/albuns/{album}', [AlbumController::class,'destroy'] );

Route::apiResource('/albuns', AlbumController::class);

Route::get('/posts', [PostController::class,'index'] );
Route::post('/posts', [PostController::class,'store'] );
Route::get('/posts/{post}', [PostController::class,'show'] );
Route::put('/posts/{post}', [PostController::class,'update'] );
Route::delete('/posts/{post}', [PostController::class,'destroy'] );

Route::apiResource('/posts', PostController::class);