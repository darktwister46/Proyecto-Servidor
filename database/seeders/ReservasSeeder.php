<?php

namespace Database\Seeders;

use App\Models\reservas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReservasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Reserva = new reservas();
        $Reserva->id_cliente = "1";
        $Reserva->id_invitado = null;
        $Reserva->id_menu = "1";
        $Reserva->id_mesa = "1";
        $Reserva->num_tarjeta = "4331423245531122";
        $Reserva->fecha_reserva = now();
        $Reserva->num_personas = "4";
        $Reserva->save();

        $Reserva2 = new reservas();
        $Reserva2->id_cliente = "2";
        $Reserva2->id_invitado = null;
        $Reserva2->id_menu = "2";
        $Reserva2->id_mesa = "2";
        $Reserva2->num_tarjeta = "3213222445671111";
        $Reserva2->fecha_reserva = "2023-11-12";
        $Reserva2->num_personas = "4";
        $Reserva2->save();
    }
}
