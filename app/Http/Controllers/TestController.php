<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Question;


class TestController extends Controller
{
    public function exam1(Request $request)
    {
        if($request->isMethod('post')){
           $exam=$this->validate($request,[
                'name'=> 'required|min:1|max:10',
                'number'=>'required',
                'major'=>'required',
                'email'=>'required',
                
            ]);
            if($exam)
            {   
                $user = new User();

                $user->name = $request->name;
                $user->number = $request->number;
                $user->major = $request->major;
                $user->email = $request->email;
                $user->gender = $request->gender;
                $user->class = $request->class;
        
                $user->save();

                return redirect('question');
            }
        }
        else{
            return view('home');
        }
    }

    public function question()
    {
        return view('question');
    }

    public function note(Request $request)
    {
 
        $question = new Question();

        $question->cate = $request->where;
        $question->prefer = $request->standard;
        $question->env = $request->env;
        $question->price = $request->price;
        $question->clear = $request->bug;
        $question->quan = $request->quan;
        $question->takeaway = $request->take;
        $question->sit = $request->sit;
        $question->advice=$request->advice;

        $question->save();

        return redirect('result');
    }

}
