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
        $favorit = Favorit::where('model_name', $data['type'])->where('favorit_id', $data['id'])->where('user_id', $data['user_id'])->first();
        if($favorit) {
            $favorit->delete();
            return response()->json(true,200);
        } else {
            Favorit::create($data);
        }
        return response()->json(true, 200);
    }
}
