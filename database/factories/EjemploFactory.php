<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ejemplo>
 */
class EjemploFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dni' => $this->dni(),
            'nombre' => $this->faker->name(),
            'apellidos' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),

            //
        ];
    }

    private function dni(): string
    {
        $letras = 'TRWAGMYFPDXBNJZSQVHLCKE';
        $numeros = fake()->randomNumber(8, true);
        $numeros = $numeros<0?-($numeros):$numeros;
        $letra = $letras[$numeros%23];
        return $numeros.$letra;

    }
}
