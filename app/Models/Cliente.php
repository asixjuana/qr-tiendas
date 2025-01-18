<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Definir los campos que se pueden llenar masivamente
    protected $fillable = ['nombre', 'email', 'telefono', 'direccion', 'fecha_firma', 'id_dispositivo', 'id_distribuidor'];

    // Relación con el modelo Distribuidor
    public function distribuidor()
    {
        return $this->belongsTo(Distribuidor::class, 'id_distribuidor');
    }

    // Relación con el modelo Dispositivo
    public function dispositivo()
    {
        return $this->belongsTo(Dispositivo::class, 'id_dispositivo');
    }
}
