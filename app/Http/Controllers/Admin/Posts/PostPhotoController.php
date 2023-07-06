<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostPhotoController extends Controller
{
    public $modelName = 'App\Models\PostPhoto';
    // public $photoFolderName = 'Posts/photos';

    public function index()
    {
        $postPhotos = PostPhoto::with('category')->get();
        $categories = Category::get();
        return view('Admin.Posts.photos', compact('postPhotos', 'categories'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $image) {
                $date = date('Y-m-d');
                $photoName = md5($image->getClientOriginalName() . time()) . '.' . $image->extension();
                $photoPath = "images/Posts/photos/{$date}";
                $image->move(public_path($photoPath), $photoName);
                $photos[] = $photoPath . '/' . $photoName;
            }
        }
        $data['photos'] = json_encode($photos);
        $postPhoto = PostPhoto::create($data);

        $add = new Post;
        $add->relationable_id = $postPhoto->id;
        $add->relationable_type = $this->modelName;
        $add->save();

        return back()->with('success', 'Maglumat üstünlikli goşuldy');
    }

    public function update(Request $request, $id)
    {
        $postPhoto = PostPhoto::find($id);
        $data = $request->all();
        if ($request->hasFile('photos')) {
            File::delete($postPhoto->photos);
            foreach ($request->file('photos') as $image) {
                $date = date('Y-m-d');
                $photoName = md5($image->getClientOriginalName() . time()) . '.' . $image->extension();
                $photoPath = "images/Posts/photos/{$date}";
                $image->move(public_path($photoPath), $photoName);
                $photos[] = $photoPath . '/' . $photoName;
            }
            $data['photos'] = json_encode($photos);
        } else {
            $data['photos'] = $postPhoto->photos;
        }
        $postPhoto->update($data);
        return redirect()->route('photos.index')->with('success', 'Maglumat üstünlikli üýtgedildi');
    }

    public function destroy($id)
    {
        $postPhoto = PostPhoto::find($id);
        foreach (json_decode($postPhoto->photos) as $photo) {
            File::delete($photo);
        }
        $postPhoto->delete();
        return back()->with('success', 'Maglumat üstünlikli pozuldy');
    }

    public function selectDeletePostPhotos()
    {
        foreach (request('id') as $photosId) {
            $postPhoto = PostPhoto::find($photosId);
            foreach (json_decode($postPhoto->photos) as $photo) {
                File::delete($photo);
            }
            $postPhoto->delete();
        }
        PostPhoto::destroy(request('id'));
        return response()->json("success", 200);
    }
}
