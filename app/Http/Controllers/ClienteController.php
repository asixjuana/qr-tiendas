<?php

use App\Models\Distribuidor;
use App\Models\Dispositivo;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // Mostrar el formulario
    public function create()
    {
        // Obtener los distribuidores y dispositivos
        $distribuidores = Distribuidor::all();
        $dispositivos = Dispositivo::all();
        return view('clientes.create', compact('distribuidores', 'dispositivos'));
    }

    // Guardar la información del cliente
    public function store(Request $request)
    {
        // Validar los datos del cliente
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:clientes,email',
            'telefono' => 'nullable|string|max:20',
            'direccion' => 'nullable|string',
            'fecha_firma' => 'required|date',
            'id_dispositivo' => 'required|exists:dispositivos,id',
            'id_distribuidor' => 'required|exists:distribuidores,id',
        ]);

        // Crear el cliente y asociarlo con un dispositivo y distribuidor
        Cliente::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'fecha_firma' => $request->fecha_firma,
            'id_dispositivo' => $request->id_dispositivo,
            'id_distribuidor' => $request->id_distribuidor,
        ]);

        // Redirigir al usuario a una página de éxito o a otra vista
        return redirect()->route('registro.cliente')->with('success', 'Cliente registrado exitosamente.');
    }
}

