<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake() -> word(3),
            'code_type' => fake() -> word(1),
            'date' => fake() -> dateTime(),
            'project_img' => fake() -> imageUrl(),
            'project_description' => fake() -> text(),

        ];
    }
}
