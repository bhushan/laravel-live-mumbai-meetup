<?php

namespace Database\Factories;

use App\Models\Note;
use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     * @var string
     */
    protected $model = Note::class;

    /**
     * Define the model's default state.
     * @return array
     */
    public function definition()
    {
        return [
            'card_id' => Card::factory(),
            'body' => $this->faker->sentence,
        ];
    }
}
