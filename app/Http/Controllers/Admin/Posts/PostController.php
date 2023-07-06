<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PostBook;
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
        foreach(request('id') as $id) {
            PostBook::destroy($id);
        }
        Post::destroy(request('id'));
        return response()->json(request('id'), 200);
    }
}
