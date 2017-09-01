<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class searchController extends Controller
{
    public function search(Request $request)
    {

        $text = $request->text;
//        dd($text);
        $results = DB::table('users')->where('first_name', 'like', '%' . $text . '%')->get();
        $result_question = DB::table('questions')->where('title', 'like', '%' . $text . '%')->get();
        $result_group = DB::table('groups')->where('name', 'like', '%' . $text . '%')->get();
//        dd($results,$result_question);
        if (count($results) > 0 || count($result_question) > 0 || count($result_group) > 0) {
//            dd($results);
            return view('frontend/layouts_new/home_page/index', compact('results', 'result_question', 'result_group'));
//        }else
//        {
//            $error = 'Not found';
//            return view('frontend/layouts_new/home_page/index',compact('error'));
//        }
        }
    }
}
