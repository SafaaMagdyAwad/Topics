<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $images=['testimonial1.jpg','testimonial2.jpg','testimonial3.jpg'];
        return [
            'name'=>fake()->name(),
            'content'=>fake()->text(300),
            'published'=>fake()->boolean(),
            'image'=>fake()->randomElement($images),
        ];
    }
}
