<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "order" => fake()->numberBetween(1, 5),
            "degree" => fake()->title,
            "school" => fake()->company,
            "school_url" => fake()->url,
            "location" => fake()->city . ', ' . fake()->word(),
            "type" => "Full-Time",
            "time_frame" => fake()->monthName . ' ' . fake()->year . " - " . fake()->monthName . ' ' . fake()->year,
            "bullet_points" => fake()->paragraphs(3, true),
            "tags" => fake()->word . ',' . fake()->word . ',' . fake()->word
        ];
    }
}
