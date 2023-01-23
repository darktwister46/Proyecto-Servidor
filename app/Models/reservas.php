<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservas extends Model
{
    use HasFactory;

    protected $table = 'reservas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id_cliente',
        'id_invitado',
        'id_menu',
        'id_mesa',
        'num_tarjeta',
        'fecha_reserva',
        'num_personas'
    ];
}
