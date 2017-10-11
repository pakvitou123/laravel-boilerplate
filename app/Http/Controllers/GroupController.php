<?php

namespace App\Http\Controllers;

use App\Helpers\Auth\Auth;
use App\Models\Access\User\User;
use App\Models\Answer;
use App\Models\Group;
use App\Models\Notification;
use App\Models\Question;
use App\Models\User_Group;
use App\VoteQuestion;
use Carbon\Carbon;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showedit(){
//        $user = User:: find($id);
        $notification_nav_bars = Notification::where('id_user_passive', \auth()->id())->get();
        return view('frontend.layouts_new.profile.content', compact('notification_nav_bars'));
    }
     public function editprofile(Request $request){

         if($request->hasFile('file')){
             $file = $request->file('file');
             if($file->getClientOriginalExtension() == "jpg" || $file->getClientOriginalExtension() == "png"){
                 $filename = time().'.'.$file->getClientOriginalExtension();
                Image::make($file)->resize(300, 300)->save(public_path('/img/profile/'.$filename));

                 $user = access()->user();
                 if($user->img != "yuyu.jpg"){
                     unlink(public_path('/img/profile/'.$user->img)); // delete old file
                 }
                 $user->img = $filename;
                 $user->first_name = $request->first_name;
                 $user->last_name = $request->last_name;
                 $user->save();
             }
         }
         return redirect('/');
     }

    public function index($id)
    {
        // $id is a id'group
        $members = User_Group::where('id_group',$id)->get();
        $array = array();
        foreach ($members as $member){
            array_push($array,$member->id);
        }

        $group = Group::find($id);
        $users = User::whereNotIn('id',$array)->get(); // users here is not member in this group
        $questions = Question::where('id_group', $id)->get();

        $usergroupItem = User_Group::whereRaw('id = ? and id_group = ?', [auth()->id() , $id])->get();

        $notification_nav_bars = Notification::where('id_user_passive', \auth()->id())->get();

        $notification =  Notification::whereRaw('id_user_active = ? and id_group = ? and action = ? ', [auth()->id(), $id, 'request'])->get();

        if (count($usergroupItem) > 0){
            $usergroup = $usergroupItem->getIterator()[0];
            if (count($notification) > 0){
                $notification = $notification->getIterator()[0];
                return view('frontend.layouts_new.group.content', compact('group','users', 'questions', 'usergroup', 'notification', 'notification_nav_bars'));
            }else{
                $notification = null;
                return view('frontend.layouts_new.group.content', compact('group', 'users', 'questions', 'usergroup', 'notification', 'notification_nav_bars'));
            }
        }else{
            $usergroup = null;
            if (count($notification) > 0){
                $notification = $notification->getIterator()[0];
                return view('frontend.layouts_new.group.content', compact('group', 'users', 'questions', 'usergroup', 'notification', 'notification_nav_bars'));
            }else{
                $notification = null;
                return view('frontend.layouts_new.group.content', compact('group', 'users', 'questions', 'usergroup', 'notification', 'notification_nav_bars'));
            }

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notification_nav_bars = Notification::where('id_user_passive', \auth()->id())->get();
        return view('frontend.layouts_new.group.create', compact('notification_nav_bars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $group = new Group();
        $group->id_user = auth()->user()->id;
        $group->name = $request->name;
        $group->decription = $request->description;
        $group->privacy = $request->privacy;
        $group->member_nb = '1';
        $group->save();

        $usergroup = new User_Group();
        $usergroup->id = auth()->id();
        $usergroup->id_group = $group->id ;
        $usergroup->priority = true;
        $usergroup->save();
        return redirect('/mygroup');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $mygroups = User_Group::where('id', \auth()->id())->get();
        $arrayGroupId = array();
        foreach ($mygroups as $mygroup){
            array_push($arrayGroupId, $mygroup->id_group);
        }
        $results = Group::whereIn('id', $arrayGroupId)->get();
        $notification_nav_bars = Notification::where('id_user_passive', \auth()->id())->get();
        if (count($notification_nav_bars)> 0){
            return view('frontend.layouts_new.group.mygroup', compact('results', 'notification_nav_bars'));
        }else{
            $notification_nav_bars = null;
            return view('frontend.layouts_new.group.mygroup', compact('results','notification_nav_bars'));
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_group)
    {
        $group = Group::find($id_group);
        $group->delete();
        return redirect()->route('frontend.index') ;
    }

    public function showquestion($id_group){
        $notification_nav_bars = Notification::where('id_user_passive', \auth()->id())->get();

        return view('frontend.layouts_new.group.createquestion', compact('id_group', 'notification_nav_bars'));
    }
    public function viewquestion($id_group, $id_question){
        $question = Question::find($id_question);
        $group = Group::find($id_group);
//        $question->count_view = $question->count_view + 1; // increase count view + 1
//        $question->update();
        $user = User::find($question->id_user);
        $vote = VoteQuestion::whereRaw('id = ? and id_user = ?',[$id_question, auth()->id()])->get();
        $notification_nav_bars = Notification::where('id_user_passive', \auth()->id())->get();

        $answer = Answer::where('id_question', $id_question)->get();
        if(count($vote->getIterator()) > 0){
            $votequestion = $vote->getIterator()[0];
            return view('frontend.layouts_new.group.viewquestion', compact('group','id_group','question', 'user', 'votequestion', 'answer', 'notification_nav_bars'));
        } else{
            $votequestion = null;
            return view('frontend.layouts_new.group.viewquestion', compact('group', 'id_group','question', 'user', 'votequestion', 'answer', 'notification_nav_bars'));
        }
    }
    public function createquestion(Request $request , $id_group){
        $question = new Question();
        $question->id_user = auth()->id();
        $question->id_group = $id_group;
        $question->title = $request->title;
        $question->img_user = \auth()->user()->img;
        $question->description = $request->description;
        $question->save();

        //send group data to view
        $group = Group::find($id_group);

        return redirect()->route('index', [$id_group]) ;
//        return view('frontend.layouts_new.group.content', compact('group'));
    }

    public function listmembers($group_id)
    {
        $notification_nav_bars = Notification::where('id_user_passive', \auth()->id())->get();
        $admin = User_Group::whereRaw('id_group = ? and priority = 1', $group_id)->first();
        $admin = User::find($admin->id);
        $membersGroups = User_Group::where('id_group',$group_id)->get();
        $arraymembers = array();
        foreach ($membersGroups as $member){
            if ($admin->id != $member->id){
                array_push($arraymembers,$member->id);
            }

        }
        $members = User::whereIn('id', $arraymembers)->get();

        $group = Group::find($group_id);
        $arrayusers = array();
        foreach ($membersGroups as $member){
                array_push($arrayusers,$member->id);
        }

        $users = User::whereNotIn('id',$arrayusers)->get(); // user here is not member in this group
        $usergroupItem = User_Group::whereRaw('id = ? and id_group = ?', [auth()->id() , $group_id])->get();
        $notification =  Notification::whereRaw('id_user_active = ? and id_group = ? and action = ? ', [auth()->id(), $group_id, 'request'])->get();

        if (count($usergroupItem) > 0){
            $usergroup = $usergroupItem->getIterator()[0];
            if (count($notification) > 0){
                $notification = $notification->getIterator()[0];
                return view('frontend.layouts_new.group.list-members', compact('group', 'users', 'questions', 'usergroup', 'notification', 'notification_nav_bars', 'members', 'admin'));
            }else{
                $notification = null;
                return view('frontend.layouts_new.group.list-members', compact('group', 'users', 'questions', 'usergroup', 'notification', 'notification_nav_bars', 'members', 'admin'));
            }
        }else{
            $usergroup = null;
            if (count($notification) > 0){
                $notification = $notification->getIterator()[0];
                return view('frontend.layouts_new.group.list-members', compact('group', 'users', 'questions', 'usergroup', 'notification', 'notification_nav_bars', 'members', 'admin'));
            }else{
                $notification = null;
                return view('frontend.layouts_new.group.list-members', compact('group', 'users', 'questions', 'usergroup', 'notification', 'notification_nav_bars', 'members', 'admin'));
            }

        }
//        return view('frontend.layouts_new.group.list-members', compact('notification_nav_bars', 'members', 'group'));
    }
    public function addmember(Request $request)
    {
        $member = new User_Group();
        $member->id = $request->id_user;
        $member->id_group = $request->id_group;
        $member->priority = false;
        $member->save();
        return redirect(route('index', [$request->id_group]));

    }

    public function showrequest(){
        // show notification on nav bar
        $notification_nav_bars = Notification::where('id_user_passive', \auth()->id())->get();
        if (count($notification_nav_bars) > 0){
            return view('frontend/layouts_new/group/show-requestion', compact('notification_nav_bars'));
        }else{
            $notification_nav_bars = null;
            return view('frontend/layouts_new/group/show-requestion', compact('notification_nav_bars'));
        }


    }

    public function showrequester($id_group){
        $notification_nav_bars = Notification::where('id_user_passive', \auth()->id())->get();
        // notifications for user request to join this group
        $notifications = Notification::whereRaw('id_user_passive = ? and id_group = ?', [\auth()->id(), $id_group])->get();
        $array_id_user_request = array();
        foreach ($notifications as $notification){
            array_push($array_id_user_request, $notification->id_user_active);
        }
        $user_requests = User::whereIn('id', $array_id_user_request)->get();
        $group = Group::find($id_group);
        $members = User_Group::where('id_group',$id_group)->get();
        $array = array();
        foreach ($members as $member){
            array_push($array,$member->id);
        }
        $users = User::whereNotIn('id',$array)->get();

        if (count($notification_nav_bars) > 0){
            $usergroupItem = User_Group::whereRaw('id = ? and id_group = ?', [auth()->id() , $id_group])->get();
            $notification =  Notification::whereRaw('id_user_active = ? and id_group = ? and action = ? ', [auth()->id(), $id_group, 'request'])->get();

            if (count($usergroupItem) > 0){
                $usergroup = $usergroupItem->getIterator()[0];
                if (count($notification) > 0){
                    $notification = $notification->getIterator()[0];
                    return view('frontend/layouts_new/group/show-requestion', compact('group',  'usergroup', 'notification', 'notification_nav_bars', 'user_requests', 'users'));
                }else{
                    $notification = null;
                    return view('frontend/layouts_new/group/show-requestion', compact('group',  'usergroup', 'notification', 'notification_nav_bars', 'user_requests', 'users'));
                }
            }else{
                $usergroup = null;
                if (count($notification) > 0){
                    $notification = $notification->getIterator()[0];
                    return view('frontend/layouts_new/group/show-requestion', compact('group',  'usergroup', 'notification', 'notification_nav_bars', 'user_requests', 'users'));
                }else{
                    $notification = null;
                    return view('frontend/layouts_new/group/show-requestion', compact('group',  'usergroup', 'notification', 'notification_nav_bars', 'user_requests', 'users'));
                }

            }
//            return view ('frontend/layouts_new/group/show-requestion', compact('notification_nav_bars', 'group', 'user_requests'));
        }else{
            $notification_nav_bars = null;
            $usergroupItem = User_Group::whereRaw('id = ? and id_group = ?', [auth()->id() , $id_group])->get();
            $notification =  Notification::whereRaw('id_user_active = ? and id_group = ? and action = ? ', [auth()->id(), $id_group, 'request'])->get();

            if (count($usergroupItem) > 0){
                $usergroup = $usergroupItem->getIterator()[0];
                if (count($notification) > 0){
                    $notification = $notification->getIterator()[0];
                    return view('frontend/layouts_new/group/show-requestion', compact('group',  'usergroup', 'notification', 'notification_nav_bars', 'user_requests', 'users'));
                }else{
                    $notification = null;
                    return view('frontend/layouts_new/group/show-requestion', compact('group',  'usergroup', 'notification', 'notification_nav_bars', 'user_requests', 'users'));
                }
            }else{
                $usergroup = null;
                if (count($notification) > 0){
                    $notification = $notification->getIterator()[0];
                    return view('frontend/layouts_new/group/show-requestion', compact('group',  'usergroup', 'notification', 'notification_nav_bars', 'user_requests', 'users'));
                }else{
                    $notification = null;
                    return view('frontend/layouts_new/group/show-requestion', compact('group',  'usergroup', 'notification', 'notification_nav_bars', 'user_requests', 'users'));
                }

            }
        }
    }

    public function like($id_group, $id_question)
    {
//        dd(auth()->id());
        $vote = VoteQuestion::whereRaw('id = ? and id_user = ?',[$id_question, auth()->id()])->get();

//        $question = VoteQuestion::find($id)->unionAll();
//        dd(cou$question->getIterator()[0]->id_user); //convert item or builder to model
        $answer = Answer::where('id_question', $id_question)->get();
        $notification_nav_bars = Notification::where('id_user_passive', \auth()->id())->get();
        if(count($vote->getIterator()) > 0){

            if($vote->getIterator()[0]->vote == 0){

                $vote->getIterator()[0]->vote = 1;
                $vote->getIterator()[0]->save();
                $votequestion = $vote->getIterator()[0];

                $question = Question::find($id_question);
                $question->like = $question->like + 1;
                $question->dislike = $question->dislike - 1;
                $question->save();

                $user = User::find($question->id_user);
//                return Response::json(['status' => true, 'dislikes' => $question->like, 'likes' => $question->like, 'vote' => $votequestion->vote]);
                return redirect()->route('viewquestion',[$id_group, $id_question]);
            } else{
                $vote->getIterator()[0]->delete();
                $votequestion = null;
                $question = Question::find($id_question);
                $question->like = $question->like - 1;
                $question->save();

                $user = User::find($question->id_user);
//                return Response::json(['status' => true, 'dislikes' => $question->like, 'likes' => $question->like, 'vote' => $votequestion]);
//                return view('frontend.layouts_new.question.index', compact('question', 'user','votequestion', 'answer', 'notification_nav_bars'));
                return redirect()->route('viewquestion',[$id_group, $id_question]);
            }
        } else{

            $vote = new VoteQuestion();
            $vote->id = $id_question;
            $vote->id_user = auth()->id();
            $vote->vote = 1;
            $vote->save();
            $votequestion = $vote;

            $question = Question::find($id_question);
            $question->like = $question->like + 1;
            $question->save();

            $user = User::find($question->id_user);
//            return Response::json(['status' => true, 'dislikes' => $question->like, 'likes' => $question->like, 'vote' => $votequestion->vote]);

//            return view('frontend.layouts_new.question.index', compact('question', 'user','votequestion', 'answer', 'notification_nav_bars'));
            return redirect()->route('viewquestion',[$id_group, $id_question]);
        }

    }

    public function dislike($id_group, $id_question)
    {
//        dd(auth()->id());
        $vote = VoteQuestion::whereRaw('id = ? and id_user = ?',[$id_question, auth()->id()])->get();


//        $question = VoteQuestion::find($id)->unionAll();
//        dd(cou$question->getIterator()[0]->id_user); //convert item or builder to model
        $answer = Answer::where('id_question', $id_question)->get();
        $notification_nav_bars = Notification::where('id_user_passive', \auth()->id())->get();
        if(count($vote->getIterator()) > 0){
            if($vote->getIterator()[0]->vote == 1){

                $vote->getIterator()[0]->vote = 0;
                $vote->getIterator()[0]->save();
                $votequestion = $vote->getIterator()[0];

                $question = Question::find($id_question);
                $question->like = $question->like - 1;
                $question->dislike = $question->dislike + 1;
                $question->save();

                $user = User::find($question->id_user);
//                return view('frontend.layouts_new.question.index', compact('question', 'user','votequestion', 'answer', 'notification_nav_bars'));
                return redirect()->route('viewquestion',[$id_group, $id_question]);
            } else{
                $vote->getIterator()[0]->delete();
                $votequestion = null;

                $question = Question::find($id_question);
                $question->dislike = $question->dislike - 1;
                $question->save();

                $user = User::find($question->id_user);

//                return view('frontend.layouts_new.question.index', compact('question', 'user','votequestion', 'answer', 'notification_nav_bars'));
                return redirect()->route('viewquestion',[$id_group, $id_question]);
            }
        } else{

            $vote = new VoteQuestion();
            $vote->id = $id_question;
            $vote->id_user = auth()->id();
            $vote->vote = 0;
            $vote->save();
            $votequestion = $vote;

            $question = Question::find($id_question);
            $question->dislike = $question->dislike + 1;
            $question->save();

            $user = User::find($question->id_user);

//            return view ('frontend.layouts_new.question.index', compact('question', 'user','votequestion', 'answer', 'notification_nav_bars'));
            return redirect()->route('viewquestion',[$id_group, $id_question]);
        }

    }

    public function popular(){
       $date = Carbon::today();
       $array_question_id = array();
        $users = User::all();
        $result_questions = Question::all();
        foreach ($result_questions as $result_question){
            if ($result_question->created_at->addDays(7) >= $date){
                array_push($array_question_id,$result_question->id);
            }
        }
        $questions_this_week = Question::whereIn('id',$array_question_id)->orderBy('count_view','desc')->limit(10)->get();

        $notification_nav_bars = Notification::where('id_user_passive', \auth()->id())->get();
        if (count($notification_nav_bars)> 0){
            return view('frontend/layouts_new/home_page/index-popular', compact('results','result_question','result_group', 'notification_nav_bars','users', 'questions_this_week'));
        }else{
            $notification_nav_bars = null;
            return view('frontend/layouts_new/home_page/index-popular', compact('results','result_question','result_group', 'notification_nav_bars','users', 'questions_this_week'));
        }

    }

    public function leaveGroup($id_group)
    {
        $user_group = User_Group::whereRaw('id = ? and id_group = ?', [\auth()->id(), $id_group])->first();
        $user_group->delete();

        $group = Group::find($id_group);
        $group->member_nb = $group->member_nb-1;
        $group->update();
        return redirect()->route('index', $id_group);
    }
}
