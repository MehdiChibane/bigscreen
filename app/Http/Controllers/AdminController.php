<?php

namespace App\Http\Controllers;

use App\Enum\QuestionEnum;
use App\Models\Answer;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function question(){
        $questions = QuestionEnum::getQuestions();
        $user = auth()->user();
        return view('admin.question',['user'=>$user,'questions'=>$questions]);
    }
    public function answer(){
        $answers = Answer::all();

        $answers_arr = Answer::all()->toArray();
        
        $user = auth()->user();
        $final_arr = array_values($answers_arr);
        $questions = QuestionEnum::getQuestions();
       
        return view('admin.answer',['user'=>$user,'answers'=>$answers,'questions'=>$questions,'answers_arr'=> $answers_arr,'final_arr'=>$final_arr]);
    }
}
