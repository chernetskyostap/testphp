<?php

namespace App\Http\Controllers\Profile;


use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index', [
            'count_posts' => Post::where('user_id', auth()->user()->id)->count()
        ]);
    }
}
