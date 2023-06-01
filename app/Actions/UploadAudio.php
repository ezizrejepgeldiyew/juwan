<?php

namespace App\Actions;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
 
class UploadAudio
{
    public static function create(Request $request, $audioFolderName)
    {
        $date = date('Y-m-d');
        $audioName = $request->audio->getClientOriginalName();
        $audioPath = "audio/{$audioFolderName}/{$date}";
        $request->audio->move(public_path($audioPath), $audioName);
        return "$audioPath/$audioName";
    }

    public static function update(Request $request, $audioFolderName, $oldaudioName)
    {
        if ($request->hasFile('audio')) {
            if ($oldaudioName) {
                File::delete($oldaudioName);
            }
            return static::create($request,$audioFolderName);
        }
        return $oldaudioName;
    }

    public static function delete($audioName)
    {
        File::delete($audioName);
    }
}
