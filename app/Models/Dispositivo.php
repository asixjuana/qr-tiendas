<?php
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    protected $fillable = ['imei', 'modelo'];

    // Relación con el cliente
    public function cliente()
    {
        return $this->hasOne(Cliente::class, 'id_dispositivo');
    }
}
