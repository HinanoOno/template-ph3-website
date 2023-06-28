<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content'=>fake()->realtext(10),
            #いらな部分を切り取り、画像名だけを取り出す
            'image'=>substr((fake()->image(storage_path('app/public'), 640, 480)),29),
            'supplement'=>fake()->realtext(10)
        ];
    }
}
