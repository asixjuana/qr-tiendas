<!DOCTYPE html>
<html>
<head>
    <title>Registro de Cliente</title>
</head>
<body>
    <h1>Registro de Cliente</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ url('/registro-cliente') }}" method="POST">
        @csrf

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono">

        <label for="direccion">Dirección:</label>
        <textarea name="direccion"></textarea>

        <label for="fecha_firma">Fecha de Firma:</label>
        <input type="date" name="fecha_firma" required>

        <label for="id_dispositivo">Dispositivo:</label>
        <select name="id_dispositivo" required>
            @foreach($dispositivos as $dispositivo)
                <option value="{{ $dispositivo->id }}">{{ $dispositivo->modelo }}</option>
            @endforeach
        </select>

        <label for="id_distribuidor">Distribuidor:</label>
        <select name="id_distribuidor" required>
            @foreach($distribuidores as $distribuidor)
                <option value="{{ $distribuidor->id }}">{{ $distribuidor->nombre }}</option>
            @endforeach
        </select>

        <button type="submit">Registrar Cliente</button>
    </form>
</body>
</html>
