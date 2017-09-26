<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Access\User\User;
use App\Models\Group;
use App\Models\Notification;
use App\Models\Question;
use Illuminate\Support\Facades\DB;

/**
 * Class FrontendController.
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = User::all();
        $result_question = Question::orderby('id','desc')->get();
        $notification_nav_bars = Notification::where('id_user_passive', \auth()->id())->get();
        if (count($notification_nav_bars)> 0){
            return view('frontend/layouts_new/home_page/index', compact('results','result_question','result_group', 'notification_nav_bars','users'));
        }else{
            $notification_nav_bars = null;
            return view('frontend/layouts_new/home_page/index', compact('results','result_question','result_group', 'notification_nav_bars','users'));
        }
//        $result_group =Group::all();

    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
}
