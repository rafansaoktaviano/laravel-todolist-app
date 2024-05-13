<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignInController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\TasklistsController;
use App\Models\Tasklists;
use Illuminate\Support\Facades\Route;
use Brian2694\Toastr\Facades\Toastr;

Route::get('/', [TasklistsController::class, 'index']);

//Tasklist
Route::post('/add-task', [TasklistsController::class, 'store']);
Route::delete('/delete-task/{id}', [TasklistsController::class, 'destroy']);
Route::patch('/check-task', [TasklistsController::class, 'edit']);
Route::get('/edit-task/edit/{id}', [TasklistsController::class, 'update']);
Route::post('/save-task/{id}', [TasklistsController::class, 'saveTask'])->middleware('auth');


// Auth Sign In
Route::get('/signin', [SignInController::class, 'index'])->name('login');
Route::post('/signin', [SignInController::class, 'store']);


// Auth Sign Up
Route::get('/signup', [SignUpController::class, 'index']);
Route::post('/signup', [SignUpController::class, 'create']);


Route::delete('/logout', [SignUpController::class, 'destroy']);