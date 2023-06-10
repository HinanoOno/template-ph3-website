<?php

namespace App\Http\Controllers;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        $questions=Question::with('choices')->get();
        return view('quiz',compact('questions'));
    }

    public function admin(){
        $questions=Question::with('choices')->get();
        return view('admin',compact('questions'));
    }
}
