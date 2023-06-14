<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Question;
use App\Models\Choice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;



class AdminQuestionController extends Controller
{
    # http:localhost/adminにアクセスするとクイズ一覧が表示される
    public function index(){
        $questions=Question::withTrashed()->with('choices')->paginate(20);
        return view('quiz-index',compact('questions'));
    }
    
    public function create(){
        return view('quiz-create');
    }
    public function store(Request $request){
        
        #画像の大きさの上限設定（1メガバイト以上の時にエラーが出る) 特定の拡張子以外は弾く
        $validated1=$request->validate([
            'content'=>'required|max:200',
            'image'=>'required|max:1024|mimes:jpg,jpeg,png,gif',
            'choice.*'=>'required|max:100',
            'answer'=>'required|integer|min:1|max:3'
        ]);
     
        
        $image = $validated1['image'];
       
        $img_path = $image->storeAs('', $image->getClientOriginalName(),'public');
       
        $result['image']=$img_path;
        $result['content']=$validated1['content'];
        if($request->supplement){
            $result['supplement']=$request->supplement;
        }
        $question=Question::create($result);
        $questionId= DB::getPdo()->lastInsertId();
      
        $choices=[$validated1['choice']];
       
        for($i=1; $i<=count($choices[0]); $i++){
            
            $data['name']=$choices[0][$i-1];
            $data['question_id']=$questionId;
            if($i==$validated1['answer']){
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
        return view('quiz-edit',compact('question'));
    }

    #$questionから$idに変更
    public function update(Request $request,$id){
        $question=Question::findorfail($id);
        if(!isset($question)){
            return redirect()->route('admin.index');
        }
        else{
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
            $question->update($result);
            $questionId= $question->id;   
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
              
                $choice=$question->choices[$i-1]
    ;           $choice->update($data);
    
            }
           
    
            session()->flash('success','更新しました');
            return redirect()->route('admin.index');
        }

       
    }
    #論理削除
    public function destroy(Question $question){
        $question->delete();

        #flashメッセージ
        if(isset($question->deleted_at)){
            session()->flash('success','削除に成功しました');
        }
        else{
            session()->flash('fail','削除に失敗しました');
        }
        #クイズ一覧にリダイレクトする
        return redirect()->route('admin.index');
    
    }
    

    #物理削除
    /*public function destroy(Question $question){
        $question->forceDelete();
        return redirect()->route('admin.index');
    }*/
}

