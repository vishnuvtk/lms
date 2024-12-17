<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'courseID' => fake()->words(3, true), //"Introduction to Laravel")
            'courseName' => strtoupper(fake()->bothify('???###')), //"ABC123")
            'description' => fake()->paragraph(), //fake course description
            'faculty_id' => \App\Models\Faculty::query()->inRandomOrder()->value('id')
        ];
    }
}