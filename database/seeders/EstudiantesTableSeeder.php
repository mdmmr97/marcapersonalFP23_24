<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstudiantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estudiante::truncate();
        Estudiante::factory(20)->create();

        /*$estudiante = new Estudiante;
        $estudiante->nombre = 'Juan';
        $estudiante->apellidos = 'Martínez';
        $estudiante->direccion = 'Dirección de Juan';
        $estudiante->votos = 130;
        $estudiante->confirmado = true;
        $estudiante->ciclo = 'DAW';
        $estudiante->save();*/
    }
}
