<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Podkast;
use App\Models\Favorit;
use App\Http\Resources\API\PodcastResource;
use Illuminate\Http\Request;

class PodkastController extends Controller
{
    public function index()
    {
        $data = Podkast::select('id', 'photo', 'title', 'description')->get();
        return response()->json(compact('data'), 200);
    }

    public function genre()
    {
        $podcastGenreId = Podkast::select('genre_id')->groupBy('genre_id')->get()->pluck('genre_id');
        $data = Genre::find($podcastGenreId);
        return response()->json(compact('data'),200);
    }

    public function genrePodcasts($id)
    {
        $data = Podkast::where('genre_id',$id)->get();
        return response()->json(compact('data'),200);
    }

    public function podcastGetId()
    {
        $data = Podkast::find(request('id'));
        $data['favorit'] = Favorit::where('model_name','App\Models\Podkast')->where('favorit_id',request('id'))->count();
        $data = PodcastResource::make($data);
        return response()->json(compact('data'),200);
    }
}
