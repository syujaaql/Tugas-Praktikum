<?php

namespace Database\Factories;

use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Dosen::class;
    public function definition(): array
    {
        return [

                'nip' => $this->faker->numerify('##########'),
                'email' => $this->faker->safeEmail(),
                'nama' => $this->faker->name(),
                'fakultas' => $this->faker->word(),
                
        ];
    }
}
