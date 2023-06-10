<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Choice;

class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('choices')->insert([[
            'question_id'=>1,
            'name'=>'約28万人',
            'valid'=>0
        ],[
            'question_id'=>1,
            'name'=>'約79万人',
            'valid'=>1
        ],[
            'question_id'=>1,
            'name'=>'約183万人',
            'valid'=>0
        ],[
            'question_id'=>2,
            'name'=>'Internet of Things',
            'valid'=>1
        ],[
            'question_id'=>2,
            'name'=>'Integrate into Technology',
            'valid'=>0
        ],[
            'question_id'=>2,
            'name'=>'Information on Tool',
            'valid'=>0
        ]]);
    }
}
