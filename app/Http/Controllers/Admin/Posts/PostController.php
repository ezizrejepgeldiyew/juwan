<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('Admin.Posts.posts', compact('posts'));
    }

    public function selectDeletePosts()
    {
        Post::destroy(request('id'));
        return response()->json("success", 200);
    }
}
