<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Choice;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            QuestionSeeder::class,
            ChoiceSeeder::class,
            UserSeeder::class
        ]);

        #Seederでタミーデータ挿入
        #正解選択肢が常に同じ番号になってしまう　ランダム化するには？
        $question=Question::factory(10)->has(
           Choice::factory()->state(function(array $attributes, Question $question) {
                return ['name' => fake()->word(),
                        'question_id'=>$question->id,
                        'valid'=>0];
            })
        )->has(
            Choice::factory()->state(function(array $attributes, Question $question) {
                 return ['name' => fake()->word(),
                         'question_id'=>$question->id,
                         'valid'=>1];
             })
         )->has(
            Choice::factory()->state(function(array $attributes, Question $question) {
                 return ['name' => fake()->word(),
                         'question_id'=>$question->id,
                         'valid'=>0];
             })
         )->create();
        
    }
}
