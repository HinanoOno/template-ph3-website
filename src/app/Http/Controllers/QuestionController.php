<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Question;
use App\Models\Choice;
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
    public function create(){
        return view('new');
    }
    public function store(Request $request){
        $question=new Question;
        $validated1=$request->validate([
            'content'=>'required|max:200',
            'image'=>'required',
        ]);
        //画像のオリジナルネームを取得
       
        $image = $request->file('image');
        $img_path = $image->storeAs('', $image->getClientOriginalName());
       
        $result['image']=$img_path;
        $result['content']=$validated1['content'];
        if($request->supplement){
            $result['supplement']=$request->supplement;
        }
        $question=Question::create($result);
        $questionId= DB::getPdo()->lastInsertId();
        $validated2=$request->validate([
            'choice1'=>'required|max:100',
            'choice2'=>'required|max:100',
            'choice3'=>'required|max:100',
            'answer'=>'required|integer|min:1|max:3'
        ]);
        $choices=[$validated2['choice1'],$validated2['choice2'],$validated2['choice3']];
        for($i=1; $i<=count($choices); $i++){
            
            $data['name']=$choices[$i-1];
            $data['question_id']=$questionId;
            if($i==$validated2['answer']){
                $data['valid']=1;
            }
            else{
                $data['valid']=0;
            }
           
            $choice=Choice::create($data);

        }
       
        session()->flash('message','新しい設問を作成しました');
        return redirect()->route('admin.index');
    }
    public function edit(Question $question){
        return view('edit',compact('question'));
    }
    public function update(Request $request,Question $question){
        $validated=$request->validate([
            'content'=>'required|max:100|string',
            'image'=>'required',
        ]);
        if($request->supplement){
            $validated['supplement']=$request->supplement;
        }

        $question->update($validated);

        session()->flash('message','更新しました');
        return redirect()->route('admin.index');
    }
}
