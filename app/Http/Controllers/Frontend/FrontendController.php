<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Access\User\User;
use App\Models\Group;
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
//        dd($user);
        $result_question = Question::all();
//        $result_group =Group::all();
        return view('frontend/layouts_new/home_page/index', compact('users','result_question','result_group'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
}
