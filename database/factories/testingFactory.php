<?php

namespace Database\Factories;

use App\Models\testing;
use Illuminate\Database\Eloquent\Factories\Factory;

class testingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = testing::class;

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
