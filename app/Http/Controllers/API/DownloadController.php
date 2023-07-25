<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\SuccessResource;
use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index()
    {
        $data = Download::where('user_id',auth()->user()->id)->count();
        return response()->json(compact('data'),200);
    }

    public function store()
    {
        Download::create([
            'user_id' => auth()->user()->id
        ]);
        return SuccessResource::make([
            'success_code' => 200,
            'message' => 'Hasaba alyndy'
        ]);
    }
}
