<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vuelos>
 */
class VuelosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $faker = $this -> faker;
        $ciudades = ["Cartagena", "Bogota", "Bucaramanga", "Medellin"];
        do {
            $ciudad_partida = $faker->randomElement($ciudades);
            $ciudad_destino = $faker->randomElement($ciudades);
        } while ($ciudad_destino === $ciudad_partida);


        return [
            "ciudad_destino" => $ciudad_destino,
            "ciudad_partida" => $ciudad_partida,
            "capacidad_pasajeros" => rand(15 , 20),
            "cupos_disponibles" => rand(0 ,20)
        ];
    }
}
