<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Notification;
use App\Models\User_Group;
use Illuminate\Http\Request;

class UserGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id_user, $id_group)
    {
        $notification = Notification::whereRaw('id_user_active = ? and id_user_passive = ?',[$id_user,auth()->id()])->get();
        $notification->getIterator()[0]->delete();

        $usergroup = new User_Group();
        $usergroup->id = $id_user;
        $usergroup->id_group = $id_group;
        $usergroup->priority = false;
        $usergroup->save();


        return redirect()->route('index', [$id_group]);
    }
    public function addmember(Request $request)
    {
        $usergroup = new User_Group();
        $usergroup->id = $request->id_user;
        $usergroup->id_group = $request->id_group;
        $usergroup->priority = false;
        $usergroup->save();

        // increase member_nb
        $group = Group::find($request->id_group);
        $group->member_nb = $group->member_nb+1;
        $group->update();

        $notification = Notification::whereRaw('id_user_active = ? and id_group = ?',[$request->id_user, $request->id_group])->first();
        if ($notification != null){
            $notification->delete();
        }

        return redirect()->route('index', [$request->id_group]);
    }

    public function approveMember($id_group, $id_user)
    {

        $usergroup = new User_Group();
        $usergroup->id = $id_user;
        $usergroup->id_group = $id_group;
        $usergroup->priority = false;
        $usergroup->save();

        // increase member_nb
        $group = Group::find($id_group);
        $group->member_nb = $group->member_nb+1;
        $group->update();

        //delete notification
        $notification = Notification::whereRaw('id_user_active = ? and id_group = ?', [$id_user, $id_group])->first();
        $notification->delete();
        return redirect()->route('showrequester', $id_group);
    }

    public function declineMember($id_group, $id_member){
// tomorrow continue
        $notification = Notification::whereRaw('id_user_active = ? and id_group = ?', [$id_member, $id_group])->first();
        $notification->delete();
        return redirect()->route('showrequester', $id_group);
    }

    public function removeMember ($id_group, $id_member){

        $member = User_Group::whereRaw('id = ? and id_group = ?', [$id_member, $id_group])->first();
        $member->delete();
        return redirect()->route('listMembers', $id_group);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User_Group  $user_Group
     * @return \Illuminate\Http\Response
     */
    public function show(User_Group $user_Group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User_Group  $user_Group
     * @return \Illuminate\Http\Response
     */
    public function edit(User_Group $user_Group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User_Group  $user_Group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User_Group $user_Group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User_Group  $user_Group
     * @return \Illuminate\Http\Response
     */
    public function destroy(User_Group $user_Group)
    {
        //
    }
}
