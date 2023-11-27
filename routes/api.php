<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sendWelcomeMail;
use App\Http\Controllers\Auth\ResgisterController;
use App\Http\Controllers\Auth\VerificationController;

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

Route::post('/register', [ResgisterController::class, 'store']);
Route::get('/email/verify/{id}/{hash}', [ResgisterController::class, 'verify'])->name('verification.verify');

// Route::put('update', [AuthController::class, 'update'])->middleware(['auth:api', 'verified']);