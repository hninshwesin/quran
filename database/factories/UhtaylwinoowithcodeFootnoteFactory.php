<?php

namespace Database\Factories;

use App\Models\UhtaylwinoowithcodeFootnote;
use Illuminate\Database\Eloquent\Factories\Factory;

class UhtaylwinoowithcodeFootnoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UhtaylwinoowithcodeFootnote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uhtaylwinoowithcode_id' => $this->faker->randomDigitNotNull,
        'heading' => $this->faker->word,
        'notes' => $this->faker->word,
        'files' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
