<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Favorit;
use Illuminate\Http\Request;

class FavoritController extends Controller
{
    public function favorit()
    {
        $data = request()->all();
        $favorit = Favorit::where('model_name', $data['model_name'])->where('favorit_id', $data['favorit_id'])->where('user_id', $data['user_id'])->first();
        if($favorit) {
            $favorit->delete();
            return response()->json('Already');
        } else {
            Favorit::create($data);
        }
        return response()->json(true, 200);
    }
}
