<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function deletePost(Post $post) {

        if (auth()->id() === $post->user_id) {
            $post->delete();
        }

        return redirect('/');
    }

    public function updatePost(Post $post, Request $request)
    {
        $incomingFields = $request->validate([
            'title' => ['required', 'min:3', 'max:200'],
            'body' => ['required', 'min:5']
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $post->update($incomingFields);
        return redirect('/');
    }

    public function editPost(Post $post)
    {
        return view('edit-post', ['post' => $post]);
    }

    public function createPost(Request $request)
    {
        $incomingFields = $request->validate([
            'title' => ['required', 'min:3', 'max:200'],
            'body' => ['required', 'min:5']
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();
        Post::create($incomingFields);
        return redirect('/');
    }
}
