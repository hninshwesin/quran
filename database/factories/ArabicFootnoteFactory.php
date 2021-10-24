<?php

namespace Database\Factories;

use App\Models\ArabicFootnote;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArabicFootnoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ArabicFootnote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'arabic_id' => $this->faker->randomDigitNotNull,
        'heading' => $this->faker->word,
        'notes' => $this->faker->word,
        'files' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
