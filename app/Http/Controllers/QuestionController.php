<?php

namespace App\Http\Controllers;

use App\Models\Access\User\User;
use App\Models\Answer;
use App\Models\Question;
use App\VoteQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($id)  // id is id'question
    {
        $question = Question::find($id);
        $question->count_view = $question->count_view + 1; // increase count view + 1
        $question->update();
        $user = User::find($question->id_user);
        $vote = VoteQuestion::whereRaw('id = ? and id_user = ?',[$id, auth()->id()])->get();

        $answer = Answer::where('id_question', $id)->get();
        if(count($vote->getIterator()) > 0){
            $votequestion = $vote->getIterator()[0];
            return view('frontend.layouts_new.question.index', compact('question', 'user', 'votequestion', 'answer'));
        } else{
            $votequestion = null;
            return view('frontend.layouts_new.question.index', compact('question', 'user', 'votequestion', 'answer'));
        }



    }

    public function myquestion(){
        $questions = DB::table('questions')->where('id_user', \auth()->id())->get();
        return view('frontend.layouts_new.question.myquestion', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.layouts_new.question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = new Question();
        $question->id_user = auth()->id();
        $question->title = $request->title;
        $question->img_user = auth()->user()->img;
        $question->description = $request->description;
        $question->save();
        return redirect('myquestion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::find($id);
        return view('frontend.layouts_new.question.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $question = Question::find($id);
        $question->title = $request->title;
        $question->description = $request->description;
        $question->save();
        return redirect('myquestion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id);
        $question->delete();
        return redirect('myquestion');
    }

    public function like($id)
    {
//        dd(auth()->id());
        $vote = VoteQuestion::whereRaw('id = ? and id_user = ?',[$id, auth()->id()])->get();

//        $question = VoteQuestion::find($id)->unionAll();
//        dd(cou$question->getIterator()[0]->id_user); //convert item or builder to model

        if(count($vote->getIterator()) > 0){

            if($vote->getIterator()[0]->vote == 0){

                $vote->getIterator()[0]->vote = 1;
                $vote->getIterator()[0]->save();
                $votequestion = $vote->getIterator()[0];

                $question = Question::find($id);
                $question->like = $question->like + 1;
                $question->dislike = $question->dislike - 1;
                $question->save();

                $user = User::find($question->id_user);
//                return Response::json(['status' => true, 'dislikes' => $question->like, 'likes' => $question->like, 'vote' => $votequestion->vote]);
                return view('frontend.layouts_new.question.index', compact('question', 'user','votequestion'));
            } else{
                $vote->getIterator()[0]->delete();
                $votequestion = null;
                $question = Question::find($id);
                $question->like = $question->like - 1;
                $question->save();

                $user = User::find($question->id_user);
//                return Response::json(['status' => true, 'dislikes' => $question->like, 'likes' => $question->like, 'vote' => $votequestion]);
                return view('frontend.layouts_new.question.index', compact('question', 'user','votequestion'));
            }
        } else{

            $vote = new VoteQuestion();
            $vote->id = $id;
            $vote->id_user = auth()->id();
            $vote->vote = 1;
            $vote->save();
            $votequestion = $vote;

            $question = Question::find($id);
            $question->like = $question->like + 1;
            $question->save();

            $user = User::find($question->id_user);
//            return Response::json(['status' => true, 'dislikes' => $question->like, 'likes' => $question->like, 'vote' => $votequestion->vote]);

            return view('frontend.layouts_new.question.index', compact('question', 'user','votequestion'));
        }

    }

    public function dislike($id)
    {
//        dd(auth()->id());
        $vote = VoteQuestion::whereRaw('id = ? and id_user = ?',[$id, auth()->id()])->get();


//        $question = VoteQuestion::find($id)->unionAll();
//        dd(cou$question->getIterator()[0]->id_user); //convert item or builder to model

        if(count($vote->getIterator()) > 0){
            if($vote->getIterator()[0]->vote == 1){

                $vote->getIterator()[0]->vote = 0;
                $vote->getIterator()[0]->save();
                $votequestion = $vote->getIterator()[0];

                $question = Question::find($id);
                $question->like = $question->like - 1;
                $question->dislike = $question->dislike + 1;
                $question->save();

                $user = User::find($question->id_user);
                return view('frontend.layouts_new.question.index', compact('question', 'user','votequestion'));
            } else{
                $vote->getIterator()[0]->delete();
                $votequestion = null;

                $question = Question::find($id);
                $question->dislike = $question->dislike - 1;
                $question->save();

                $user = User::find($question->id_user);

                return view('frontend.layouts_new.question.index', compact('question', 'user','votequestion'));
            }
        } else{

            $vote = new VoteQuestion();
            $vote->id = $id;
            $vote->id_user = auth()->id();
            $vote->vote = 0;
            $vote->save();
            $votequestion = $vote;

            $question = Question::find($id);
            $question->dislike = $question->dislike + 1;
            $question->save();

            $user = User::find($question->id_user);

            return view ('frontend.layouts_new.question.index', compact('question', 'user','votequestion'));
        }

    }
}
