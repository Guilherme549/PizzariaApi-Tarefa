<?php

use App\Http\Controllers\PizzaController;

Route::get('/pizzas', [PizzaController::class, 'index']);
Route::post('/pizzas', [PizzaController::class, 'store']);
Route::get('/pizzas/{id}', [PizzaController::class, 'show']);
Route::put('/pizzas/{id}', [PizzaController::class, 'update']);
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy']);

