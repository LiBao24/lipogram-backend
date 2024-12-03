<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_post' => 'required|exists:posts,id_post',
            'id_user' => 'required|exists:users,id_user',
            'isi_komentar' => 'required|string|max:220',
        ]);

        $comment = Comment::create($validated);
        return response()->json(['comment' => $comment], 201);
    }

    public function index($postId)
    {
        $comments = Comment::where('id_post', $postId)->get();
        return response()->json(['comments' => $comments]);
    }
}
