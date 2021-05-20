<?php

namespace Database\Factories;

use App\Models\ClothingStore;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClothingStoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClothingStore::class;

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
