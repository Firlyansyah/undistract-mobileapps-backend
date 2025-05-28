<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SyncController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Sanctum;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// Sync
Route::post('/sync/all', [SyncController::class, 'syncAll']);
Route::get('/fetch/all', [SyncController::class, 'fetchAll']);

