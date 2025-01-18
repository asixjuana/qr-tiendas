<?php
use Illuminate\Database\Eloquent\Model;

class Distribuidor extends Model
{
    protected $fillable = ['nombre', 'cif', 'telefono', 'email', 'direccion', 'persona_contacto'];

    // Relación con los clientes
    public function clientes()
    {
        return $this->hasMany(Cliente::class, 'id_distribuidor');
    }
}
