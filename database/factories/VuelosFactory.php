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
            "cupos_disponibles" => rand(0 ,20),
            "picture" => "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pexels.com%2Fes-es%2Fbuscar%2Fciudad%2F&psig=AOvVaw3g_-98u9_GSCcy0uke7gP4&ust=1690684096727000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCPitm5nvsoADFQAAAAAdAAAAABAE"
        ];
    }
}
