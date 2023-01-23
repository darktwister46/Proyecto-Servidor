<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $User = new User();
        $User->name = "Ismael";
        $User->apellidos = "Cordoba";
        $User->email = "icr0008@alu.medac.es";
        $User->email_verified_at = now();
        $User->password = '$2a$12$r5GJ6DpIW8RwFiV4Ws2mqOzCn9P2ElRjfsATIy8xjHQ8snOYhcaeu';
        $User->telefono = "666777888";
        $User->save();
        User::factory(10)->create();
    }
}
