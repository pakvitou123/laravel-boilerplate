<?php

namespace App\Http\Controllers;

use App\Helpers\Auth\Auth;
use App\Models\Group;
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
        $group = Group::find($id);
//        if (Auth::check() == false) {
//            redirect('/');
//        }
//        dd($group->name);
        return view('frontend.layouts_new.group.content', compact('group'));
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
        $group->name = $request->title;
        $group->decription = $request->decription;
        $group->privacy = $request->privacy;
        $group->member_nb = '1';
        $group->save();
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
}
