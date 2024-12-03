<?php

namespace App\Http\Controllers;

use App\Models\Search;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('query');
        $results = User::where('username', 'like', '%' . $query . '%')->get();
        return response()->json(['results' => $results]);
    }
}
