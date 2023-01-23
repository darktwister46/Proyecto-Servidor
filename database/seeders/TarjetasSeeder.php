<?php

namespace Database\Seeders;

use App\Models\tarjetas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TarjetasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tarjeta1 = new tarjetas;
        $tarjeta1->num_tarjeta = "433351267421223411";
        $tarjeta1->mes_caducidad = "July";
        $tarjeta1->anio_caducidad = "2027";
        $tarjeta1->cvv = "198";
        $tarjeta1->id_cliente = '1';
        $tarjeta1->save();
        $tarjeta2 = new tarjetas;
        $tarjeta2->num_tarjeta = "4123236674213561";
        $tarjeta2->mes_caducidad = "February";
        $tarjeta2->anio_caducidad = "2030";
        $tarjeta2->cvv = "105";
        $tarjeta2->id_cliente = '2';
        $tarjeta2->save();
    }
}
