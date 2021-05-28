<?php

namespace Database\Factories;

use App\Models\ShweFootnote;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShweFootnoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ShweFootnote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'shwe_id' => $this->faker->randomDigitNotNull,
        'heading' => $this->faker->word,
        'notes' => $this->faker->word,
        'files' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
