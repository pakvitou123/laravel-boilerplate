<?php

namespace App\Http\Controllers;

use App\Helpers\Auth\Auth;
use App\Models\Group;
use App\Models\Question;
use App\Models\User_Group;
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
        return view('frontend.layouts_new.profile.content');
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

        $group = Group::find($id);
//        if (Auth::check() == false) {
//            redirect('/');
//        }
//        dd($group->name);
        $questions = Question::where('id_group', $id)->get();

        $usergroupItem = User_Group::whereRaw('id = ? and id_group = ?', [auth()->id() , $id])->get();

        if (count($usergroupItem) > 0){
            $usergroup = $usergroupItem->getIterator()[0];
            return view('frontend.layouts_new.group.content', compact('group','questions', 'usergroup'));
        }else{
            $usergroup = null;
            return view('frontend.layouts_new.group.content', compact('group','questions', 'usergroup'));
        }

//        return view('frontend.layouts_new.group.content', compact('group','questions', 'usergroup'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.layouts_new.group.create');
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
    public function show(Group $group)
    {
        $results = DB::table('groups')->where('id_user', \auth()->id())->get();
        return view('frontend.layouts_new.group.mygroup', compact('results'));
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
    public function destroy(Group $group)
    {
        //
    }

    public function showquestion($id_group){

        return view('frontend.layouts_new.group.createquestion', compact('id_group'));
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
}
