<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $subject = ['Technology', 'Health', 'Business', 'Education', 'Sports'];
        return [
            'name'=>fake()->name(),
            'email'=>fake()->safeEmail(),
            'subject'=>fake()->randomElement($subject),
            'message'=>fake()->text(600),
            'isread'=>fake()->boolean(),
        ];
    }
}
