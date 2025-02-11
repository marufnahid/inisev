<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/inisev/posts', [PostController::class, 'store']);
Route::post('/inisev/{web}/subscribe', [SubscriptionController::class, 'store']);
