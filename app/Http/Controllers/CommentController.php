<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    //

    
    public function store(Request $request,Post $post)
    {
        $validated = $request->validate([
            'content' => 'required',
        ]);

        $comment = new Comment();
        $comment->content = $validated['content'];
        $comment->post_id = $post->id;
        $comment->save();

        return redirect()->route('posts.show', $post->id)->with('success', 'Comment added successfully.');
    }
}
