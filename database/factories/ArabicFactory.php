<?php

namespace Database\Factories;

use App\Models\Arabic;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArabicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Arabic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'chapter' => $this->faker->randomDigitNotNull,
        'verse' => $this->faker->randomDigitNotNull,
        'translation' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
