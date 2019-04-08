<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index', [
            'posts' => Post::where('published', 1)->orderBy('id','desc')->paginate(20)
        ]);
    }

    public function post($slug) {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('blog.post', [
            'post' => $post,
            'comments' => $post->comments()->orderBy('created_at','desc')->get()
        ]);
    }

    public function addComment(Request $request)
    {
        $post = Post::findOrFail($request->post_id);
        $comment = Comment::create($request->all());
        return redirect()->route('blog.post', $post->slug);
    }

    public function postAjax(Request $request)
    {
        $posts = Post::where('published', 1)->orderBy('id','desc')->where('id', '<', $request->id)->limit(20)->offset($request->offset)->get();

        return view('blog.partials.postajax', [
            'posts' => $posts
        ]);
    }
}
