<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DraftController;



// ============= ROUTE ADMIN ======================== //
Route::get('/',[DashboardController::class, 'index']);

Route::get('/dashboard',[DashboardController::class, 'index']);
// PROFILE
Route::get('/profile',[ProfileController::class, 'index']);
Route::get('/edit',[ProfileController::class, 'edit']);
// POST
Route::get('/post',[PostController::class, 'index']);
Route::get('/add',[PostController::class, 'create']);
// DRAFT
Route::get('/draft',[DraftController::class, 'index']);
