<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Suscripción</title>
</head>
<body>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('submitForm') }}" method="POST">
        @csrf
        <input type="hidden" name="id_tienda" value="{{ $idTienda }}">
        <input type="hidden" name="imei" value="{{ $imei }}">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="email">Correo:</label>
        <input type="email" name="email" required>

        <label for="firma">Firma del Contrato:</label>
        <input type="text" name="firma" required>

        <label for="forma_pago">Forma de Pago:</label>
        <select name="forma_pago" required>
            <option value="tarjeta">Tarjeta de Crédito</option>
            <option value="transferencia">Transferencia Bancaria</option>
            <option value="paypal">PayPal</option>
        </select>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
