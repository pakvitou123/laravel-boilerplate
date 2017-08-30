<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Access\User\User;

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
        $results = User::all();
        return view('frontend/layouts_new/home_page/index', compact('results'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
    public function demo(){
//        $results = User::all();
        //dd($results);
        return view('frontend.layouts_new.home_page.demo',compact('results'));
    }
}
