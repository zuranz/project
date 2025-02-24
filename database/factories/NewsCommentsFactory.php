<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewsComments>
 */
class NewsCommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => $this->faker->paragraph(),
            //'user_id' => random_int(1,6),
            'username' =>$this->faker->name(null),
            'News_id' => random_int(1,10),
            //
        ];
    }
}
