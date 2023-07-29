<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Favorit;

class FavoritController extends Controller
{
    public function index()
    {
        $books = Favorit::with('favorit')->where('model_name', 'App\Models\Book')
            ->select('favorit_id', 'model_name')
            ->groupBy('favorit_id', 'model_name')
            ->selectRaw('favorit_id, count(*) as quantity')
            ->get();
        $podcasts = Favorit::with('favorit')->where('model_name', 'App\Models\Podkast')
            ->select('favorit_id', 'model_name')
            ->groupBy('favorit_id', 'model_name')
            ->selectRaw('favorit_id, count(*) as quantity')
            ->get();
        $postPhotos = Favorit::with('favorit')->where('model_name', 'App\Models\PostPhoto')
            ->select('favorit_id', 'model_name')
            ->groupBy('favorit_id', 'model_name')
            ->selectRaw('favorit_id, count(*) as quantity')
            ->get();
        $postVideos = Favorit::with('favorit')->where('model_name', 'App\Models\PostVideo')
            ->select('favorit_id', 'model_name')
            ->groupBy('favorit_id', 'model_name')
            ->selectRaw('favorit_id, count(*) as quantity')
            ->get();
        return view('Admin.favorit', compact('books', 'podcasts', 'postPhotos', 'postVideos'));
    }
}
