<?php

namespace App\Http\Controllers;

use App\Models\Access\User\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class searchController extends Controller
{
    public function search(Request $request)
    {
        $text = $request->title;
        $result_question = DB::table('questions')
            ->where('title', 'like', '%' . $text . '%')
            ->orderBy('created_at', 'desc')
            ->get();
        $users =User::all();

        return view('frontend/layouts_new/home_page/index', compact('results', 'result_question', 'result_group', 'users'));
    }

}
