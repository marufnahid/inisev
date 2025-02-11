<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('test', function (Request $request) {
    return "Test Done";
});

Route::post('/inisev/posts', [PostController::class, 'store']);
Route::post('/inisev/subscribe', [SubscriptionController::class, 'store']);
