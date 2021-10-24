<?php

namespace Database\Factories;

use App\Models\UhtaylwinooFootnote;
use Illuminate\Database\Eloquent\Factories\Factory;

class UhtaylwinooFootnoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UhtaylwinooFootnote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uhtaylwinoo_id' => $this->faker->randomDigitNotNull,
        'heading' => $this->faker->word,
        'notes' => $this->faker->word,
        'files' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
