<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'organizer_id'=>1,
            'title'=>$this->faker->sentence,
            'description'=>$this->faker->paragraph,
            'start_date'=>now(3),
            'end_date'=>now(6),
            'required_volunteers'=>$this->faker->numberBetween(1,10)
        ];
    }
}
