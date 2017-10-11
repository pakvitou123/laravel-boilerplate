<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\User_Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class NotificationController extends Controller
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
    public function store($idgroup)
    {
        $usergroup = User_Group::whereRaw('id_group = ? and priority = 1', [$idgroup])->get(); // get admin group
        $usergroup = $usergroup->getIterator()[0];

        $notification = new Notification();
        $notification->id_user_active = auth()->id() ;
        $notification->id_user_passive = $usergroup->id;
        $notification->id_group = $idgroup;
        $notification->action = 'request';
        $notification->seeing = '0';
        $notification->save();

        return redirect()->route('index', [$idgroup]) ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $notifications = Notification::where([
            ['id_user_passive', auth()->user()->id]
        ])->get();
        return Response::json(['status' => true, 'data' => $notifications]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function edit(Notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notification $notification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_group)
    {
        $notification = Notification:: whereRaw('id_user_active = ? and id_group = ? and action = ?', [auth()->id(), $id_group, 'request'])->get();
        $notification = $notification->getIterator()[0];
        $notification->delete();
        return redirect()->route('index', [$id_group]) ;
    }

    public function addmember($id_user, $id_group)
    {

    }
}
