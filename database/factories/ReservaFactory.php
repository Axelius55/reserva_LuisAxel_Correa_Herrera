<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reserva;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reserva>
 */
class ReservaFactory extends Factory
{
    protected $model= Reserva::class;
   
    public function definition(): array
    {
        return [
            'nombre_sala' => $this->faker->word(), 
            'fecha_reserva' => $this->faker->date(), 
            'hora_inicio' => $this->faker->numberBetween(0, 23), 
            'hora_fin' => $this->faker->numberBetween(0, 23), 
            'nombre_cliente' => $this->faker->name(), 
        ];
    }

}
