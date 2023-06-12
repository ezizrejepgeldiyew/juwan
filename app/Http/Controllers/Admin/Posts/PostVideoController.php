<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Actions\CRUD;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostVideoController extends Controller
{
    public $modelName = 'App\Models\PostVideo';
    protected $videoFolderName = 'Posts/videos';


    public function index()
    {
        $categories = Category::get();
        $postVideos = PostVideo::with('category')->get();
        return view('Admin.Posts.videos', compact('categories', 'postVideos'));
    }

    public function store(Request $request)
    {
        $postVideo = CRUD::create($this->modelName, $request, null, null, $this->videoFolderName);

        $add = new Post();
        $add->relationable_id = $postVideo->id;
        $add->relationable_type = $this->modelName;
        $add->save();
        return back()->with('success', 'Maglumat üstünlikli goşuldy');
    }

    public function update(Request $request, $id)
    {
        CRUD::update($this->modelName, $request, $id, null, null, $this->videoFolderName);
        return redirect()->route('videos.index')->with('success', 'Maglumat üstünlikli üýtgedildi');
    }

    public function destroy($id)
    {
        CRUD::delete($this->modelName, $id);
        return back()->with('success', 'Maglumat üstünlikli pozuldy');
    }

    public function selectDeletePostVideos()
    {
        foreach (request('id') as $videoId) {
            $postVideo = PostVideo::find($videoId);
            File::delete($postVideo->video);
            $postVideo->delete();
        }
        return response()->json("success", 200);
    }
}
