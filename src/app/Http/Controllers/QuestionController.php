<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Question;
use App\Models\Choice;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function quiz(){
        $questions=Question::with('choices')->get();
        return view('quiz',compact('questions'));
    }

   
}
