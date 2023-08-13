<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Vuelos;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VuelosTomados>
 */
class VuelosTomadosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $vuelo = Vuelos::inRandomOrder()->first();

        return [
            'user_id' => $user->id,
            'vuelo_id' => $vuelo->id,
        ];
    }


}
