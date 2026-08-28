<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/client', [ClientController::class, 'index']); //Lista todos os clientes (index)
Route::get('/client/create', [ClientController::class, 'create']); //Abre formulario para cadastrar (create)
Route::post('/client', [ClientController::class, 'store']); //Guarda o dado no banco de dados (store)

