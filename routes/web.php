<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact/confirm', [ContactController::class, 'confirm']);
Route::post('/contact/submit', [ContactController::class, 'store']);
Route::get('/contact/thanks', [ContactController::class, 'thanks']);
