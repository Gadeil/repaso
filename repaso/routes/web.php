<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistroController;

/* 
Es una ruta para el metodo inicio 

Ruta, recupera inf, ruta que responde al URL, Cuando un usuario accede a la URL raíz, Laravel llamará al método
  |     |   |---------|                             |  
  |     |   |               |-----------------------|
                            |                           
                            |                       Establece el nombre de la ruta
                            |                                |        |                     */
Route::get('/', [RegistroController::class,'metodoInicio'])->name('apodoInicio');

Route::get('/Registro', [RegistroController::class,'metodoRegistro'])->name('apodoRegistro');



Route::post('/guardarLibro', [RegistroController::class, 'metodoGuardar'])->name('guardar');