<?php

namespace Database\Seeders;

use App\Models\Tarifa;
use Illuminate\Database\Seeder;

class TarifasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tarifa::create([
            'titulo' => 'Económica',
            'precio' => '5 €',
			'cualidad1' => 'Hasta 1 kg de peso',
            'cualidad2' => 'Volumen inferior a 30x20x10 cm',
            'cualidad3' => 'Entrega antes de 48 horas',
            'cualidad4' => 'El mejor servicio',
        ]);
        Tarifa::create([
            'titulo' => 'Hogar',
            'precio' => '15 €',
			'cualidad1' => 'Hasta 7 kg de peso',
            'cualidad2' => 'Volumen inferior a 50x50x50 cm',
            'cualidad3' => 'Entrega antes de 48 horas',
            'cualidad4' => 'El mejor servicio',
        ]);
        Tarifa::create([
            'titulo' => 'Profesional',
            'precio' => '50 €',
			'cualidad1' => 'Hasta 25 kg de peso',
            'cualidad2' => 'Volumen transportable por un operari',
            'cualidad3' => 'Entrega antes de 48 horas',
            'cualidad4' => 'El mejor servicio',
        ]);
    }
}
