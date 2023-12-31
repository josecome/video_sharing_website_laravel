<?php

use App\Http\Controllers\ApiController;
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

Route::middleware('cors')->group(function () {
    Route::get('/', [ApiController::class, 'home'])->name('home');
    Route::get('/video/{id}', [ApiController::class, 'video'])->name('videos');
    Route::get('/video/{id}/options_of_videos', [ApiController::class, 'OptionsOfVideos'])->name('videos');
});
