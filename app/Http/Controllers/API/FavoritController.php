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
        $header = request()->header('Authorization');
        $user = $this->howUser($header);
        $path = request('type');
        $path = substr($path,0,4).substr($path,5,7).substr($path,13,strlen($path));
        if ($user == false)  return ErrorResource::make([
            'error_code' => 401,
            'message' => 'Unauthorised'
        ]);
        $favorit = Favorit::where('model_name', $path)->where('favorit_id', request('id'))->where('user_id', $user->id)->first();
        $data['success'] = true;
        if ($favorit) {
            $favorit->delete();
            return response()->json(compact('data'), 200);
        } else {
            Favorit::create([
                'favorit_id' => request('id'),
                'model_name' => $path,
                'user_id' => $user->id
            ]);
        }
        return response()->json(compact('data'), 200);
    }

    public function howUser($token)
    {
        $token = str_replace('Bearer', '', $token);
        $accessToken = PersonalAccessToken::findToken($token);
        if ($accessToken) {
            return  $accessToken->tokenable;
        } else {
            return false;
        }
    }

    public function getFavorit()
    {
        $header = request()->header('Authorization');
        $user = $this->howUser($header);
        if ($user == false)  return ErrorResource::make([
            'error_code' => 401,
            'message' => 'Unauthorised'
        ]);
        $data = Favorit::where('user_id', $user->id)->paginate(5);
        return response()->json(compact('data'), 200);
    }
}
