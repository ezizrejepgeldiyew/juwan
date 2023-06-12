<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Podkast;
use Illuminate\Http\Request;

class PodkastController extends Controller
{
    public function podkast()
    {
        $data = Podkast::with('category')->get();
        return response()->json(compact('data'), 200);
    }

    public function category()
    {
        $podkastCategoryId = Podkast::select('category_id')->groupBy('category_id')->get()->pluck('category_id');
        $data = Category::find($podkastCategoryId);
        return response()->json(compact('data'), 200);
    }

    public function genre()
    {
        $podcastGenreId = Podkast::select('genre_id')->groupBy('genre_id')->get()->pluck('genre_id');
        $data = Genre::find($podcastGenreId);
        return response()->json($data,200);
    }
}
