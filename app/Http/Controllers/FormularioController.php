<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function show(Request $request)
    {
        // Recuperar los parámetros de la URL
        $idTienda = $request->input('id_tienda');
        $imei = $request->input('imei');

        // Mostrar la vista del formulario
        return view('formulario', compact('idTienda', 'imei'));
    }

    public function submitForm(Request $request)
    {
        // Validar y guardar los datos del formulario
        $validated = $request->validate([
            'nombre' => 'required|string',
            'email' => 'required|email',
            'firma' => 'required|string',
            'forma_pago' => 'required|string',
        ]);

        // Aquí puedes guardar los datos en la base de datos
        // por ejemplo, con Eloquent o DB facade.

        return redirect()->route('formulario')->with('success', 'Formulario enviado con éxito');
    }
}

