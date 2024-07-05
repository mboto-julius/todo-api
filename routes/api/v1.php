<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\Api\V1\TaskController;
use App\Http\Controllers\Api\V1\CompleteTaskController;

// For education purpose v1 do not require authentication so remove the middleware('auth:sanctum')

Route::prefix('v1')->group(function () {
    Route::apiResource('tasks', TaskController::class);
    Route::patch('/tasks/{task}/complete', CompleteTaskController::class);
});