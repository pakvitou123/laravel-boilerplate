<?php

namespace App\Http\Controllers\Backend\Search;

use App\Models\Access\User\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class SearchController.
 */
class SearchController extends Controller
{
    /**
     * @param Request $request
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        if (! $request->has('q')) {
            return redirect()
                ->route('admin.dashboard')
                ->withFlashDanger(trans('strings.backend.search.empty'));
        }

        /**
         * Process Search Results Here.
         */
        $results = User::all();
//        $demo = User::all();
        return view('backend.search.index')
            ->withSearchTerm($request->get('q'))
            ->withResults($results);
    }
}
