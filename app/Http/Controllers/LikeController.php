<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_post' => 'required|exists:posts,id_post',
            'id_user' => 'required|exists:users,id_user',
        ]);

        $like = Like::create($validated);
        return response()->json(['like' => $like], 201);
    }
}
