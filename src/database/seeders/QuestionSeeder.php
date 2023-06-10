<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('questions')->insert([[
            'content'=>'日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？',
            'image'=>'img/img-quiz01.png',
            'supplement'=>'経済産業省 2019年3月 － IT 人材需給に関する調査'
        ],[
            'content'=>'IoTとは何の略でしょう？',
            'image'=>'img/img-quiz02.png',
            'supplement'=>''
        ]]);
    }
}
