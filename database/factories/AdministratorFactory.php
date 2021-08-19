<?php

namespace Database\Factories;

use App\Models\Administrator;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdministratorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Administrator::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'jabatan' => $this->faker->sentence(2)
        ];
    }
}
