<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\ErrorResource;
use App\Models\Favorit;
use App\Models\PostVideo;
use Laravel\Sanctum\PersonalAccessToken;

class FavoritController extends Controller
{
    public function favorit()
    {
        $user = auth()->user();
        $path = request('type');
        $path = substr($path, 0, 4) . substr($path, 5, 7) . substr($path, 13, strlen($path));
        $favorit = Favorit::where('model_name', $path)->where('favorit_id', request('id'))->where('user_id', $user->id)->first();
        $data['success'] = true;
        if ($favorit) {
            $favorit->delete();
            $data['message'] = 'Unfavorit';
            return response()->json(compact('data'), 200);
        } else {
            Favorit::create([
                'favorit_id' => request('id'),
                'model_name' => $path,
                'user_id' => $user->id
            ]);
            $data['message'] = 'Favorit';
        }
        return response()->json(compact('data'), 200);
    }

    public function getFavorit()
    {
        $user = auth()->user();
        $data = Favorit::with('favorit')->where('user_id', $user->id)->paginate(5);
        return response()->json(compact('data'), 200);
    }
}
