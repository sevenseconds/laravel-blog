<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getDashboard()
    {
        $posts = Post::all();
        return view('dashboard', ['posts' => $posts]);
    }

    public function postCreate(Request $request)
    {
        $this->validate($request, [
            'body' => 'required|max:1000'
        ]);
        $post = new Post();
        $post->body = $request['body'];
        $message = 'There was an error';
        if ($request->user()->posts()->save($post)) {
            $message = 'Post successfully';
        }
        return redirect()->route('dashboard')->with(['message' => $message]);
    }

    public function deletePost($postId)
    {
        $post = Post::find($postId);
        $post->delete();
        return redirect()->route('dashboard')->with(['message' => 'Delete successfully']);
    }
}
