<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SyncController;
use App\Http\Controllers\Api\DashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Sanctum;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// Sync
Route::post('/sync/all', [SyncController::class, 'syncAll']);
Route::get('/fetch/all', [SyncController::class, 'fetchAll']);

// Dashboard API Routes
Route::prefix('dashboard')->group(function () {
    Route::get('/total-users', [DashboardController::class, 'getTotalUsers']);
    Route::get('/most-used-apps', [DashboardController::class, 'getMostUsedApps']);
    Route::get('/most-blocked-apps', [DashboardController::class, 'getMostBlockedApps']);
});

