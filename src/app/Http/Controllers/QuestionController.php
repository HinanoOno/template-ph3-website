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

    public function index(){
        
        $questions=Question::withTrashed()->with('choices')->paginate(20);
     
      
      
        return view('admin',compact('questions'));
    }
    public function create(){
        return view('new');
    }
    public function store(Request $request){

        $validated1=$request->validate([
            'content'=>'required|max:200',
            'image'=>'required',
        ]);
        //画像のオリジナルネームを取得
       
        $image = $request->file('image');
        $img_path = $image->storeAs('', $image->getClientOriginalName(),'public');
       
        $result['image']=$img_path;
        $result['content']=$validated1['content'];
        if($request->supplement){
            $result['supplement']=$request->supplement;
        }
        $question=Question::create($result);
        $questionId= DB::getPdo()->lastInsertId();
        $validated2=$request->validate([
            'choice.*'=>'required|max:100',
            'answer'=>'required|integer|min:1|max:3'
        ]);
        $choices=[$validated2['choice']];
       
        for($i=1; $i<=count($choices[0]); $i++){
            
            $data['name']=$choices[0][$i-1];
            $data['question_id']=$questionId;
            if($i==$validated2['answer']){
                $data['valid']=1;
            }
            else{
                $data['valid']=0;
            }
           
            $choice=Choice::create($data);

        }
       
        session()->flash('success','新しい設問を作成しました');
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
            $result['supplement']=$request->supplement;
        }
        $image = $request->file('image');
        $img_path = $image->storeAs('', $image->getClientOriginalName(),'public');
        $result['image']=$img_path;
        $result['content']=$validated['content'];

        $question->update($result);

        session()->flash('success','更新しました');
        return redirect()->route('admin.index');
    }
    public function destroy(Question $question){
        $question->delete();
        if(isset($question->deleted_at)){
            session()->flash('success','削除に成功しました');
        }
        else{
            session()->flash('fail','削除に失敗しました');
        }
        return redirect()->route('admin.index');
    
    }
}
