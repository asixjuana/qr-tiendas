<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class QRController extends Controller
{
    public function generateQR($id_tienda, $imei)
    {
        // Construir la URL con los parámetros
        $url = route('formulario') . '?id_tienda=' . $id_tienda . '&imei=' . $imei;

        // Crear el QR
        $qrCode = new QrCode($url);
        $writer = new PngWriter();
        $result = $writer->write($qrCode);

        // Devolver el QR como imagen
        return response($result->getString(), 200)
                ->header('Content-Type', 'image/png');
    }
}
