<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    /*public function store(Request $request)
    {
        $comment = new Comment;

        $comment->comment = $request->comment;

        $post = Post::find($request->post_id);

        $post->comments()->save($comment);

        return back();
    }
    /** */
    public function index()
    {
        $comment = Comment::orderBy('id', 'desc')->get();

        return response()->json($comment);
    }

    public function store(Request $request)
    {
        $comment = Comment::create($request->only(['comment']));
        return response()->json([
            'message' => 'Comment has been added.',
            'comment' => $comment
        ]);
    }
    public function show($id)
    {
        $comment = Comment::find($id);
        return response()->json($comment);
    }
    public function update(Request $request, Comment $comment)
    {
        $comment->update($request->only(['comment']));

        return response()->json([
            'message' => 'Comment has been updated.',
            'comment' => $comment
        ]);
    }
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return response()->json([
            'message' => 'Comment has been deleted.',
            'comment' => $comment
        ]);
    }
}
