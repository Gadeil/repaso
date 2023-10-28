<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistroRequest;

class RegistroController extends Controller
{
    public function metodoInicio()
    {
        return view('welcome');
    }

    public function metodoRegistro()
    {
        return view('Registro');
    }

    public function metodoGuardar(RegistroRequest $req)
    {
        return redirect('/Registro')->with('confirmacion', 'Tu registro se guardó');
    }
}
