<?php

namespace App\Actions;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UploadVideo
{
    public static function create(Request $request, $videoFolderName)
    {
        $date = date('Y-m-d');
        $videoName = md5($request->video->getClientOriginalName() . time()) . '.' . $request->video->extension();
        $videoPath = "video/{$videoFolderName}/{$date}";
        $request->video->move(public_path($videoPath), $videoName);
        return "$videoPath/$videoName";
    }

    public static function update(Request $request, $videoFolderName, $oldVideoName)
    {
        if ($request->hasFile('video')) {
            if ($oldVideoName) {
                File::delete($oldVideoName);
            }
            return static::create($request,$videoFolderName);
        }
        return $oldVideoName;
    }

    public static function delete($videoName)
    {
        File::delete($videoName);
    }
}
