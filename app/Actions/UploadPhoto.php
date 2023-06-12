<?php

namespace App\Actions;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UploadPhoto
{
    public static function create(Request $request, $photoFolderName)
    {
        $date = date('Y-m-d');
        $photoName = md5($request->photo->getClientOriginalName() . time()) . '.' . $request->photo->extension();
        $photoPath = "images/{$photoFolderName}/{$date}";
        $request->photo->move(public_path($photoPath), $photoName);
        return "$photoPath/$photoName";
    }

    public static function update(Request $request, $photoFolderName, $oldPhotoName)
    {
        if ($request->hasFile('photo')) {
            if ($oldPhotoName) {
                File::delete($oldPhotoName);
            }
            return static::create($request, $photoFolderName);
        }
        return $oldPhotoName;
    }

    public static function delete($photoName)
    {
        File::delete($photoName);
    }
}
