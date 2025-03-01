<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class, 'index'])->name('home');
Route::get('/novoEvento',[UserController::class, 'novoEvento'])->name('novoEvento');
Route::post('/novoEvento',[UserController::class, 'store']);
Route::get('/editar/{id}',[UserController::class, 'editarEvento'])->name('editarEvento');
Route::put('/editar/{id}',[UserController::class, 'update']);
Route::delete('/deletar/{id}',[UserController::class, 'destroy']);
