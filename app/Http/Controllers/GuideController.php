<?php

namespace App\Http\Controllers;

use App\Models\QuestionModel;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function guide(){
        return view('guide');
    }
    public function support(request $request){
        // dd($request);

        $valid = $request ->validate([
            'email'=>'required|min:5|max:20',
            'question'=> 'required|max:100'
        ]);

        $question = new QuestionModel();
        $question->email = $request->input('email');
        $question->question = $request->input('question');

        $question->save();

        return redirect('/guide');
        // return view('depositary');
    }
}
