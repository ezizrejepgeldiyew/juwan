<?php

namespace App\Actions;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UploadFile
{
    public static function create(Request $request, $fileFolderName)
    {
        $date = date('Y-m-d');
        $fileName = md5($request->file->getClientOriginalName() . time()) . '.' . $request->file->extension();
        $filePath = "file/{$fileFolderName}/{$date}";
        $request->file->move(public_path($filePath), $fileName);
        return "$filePath/$fileName";
    }

    public static function update(Request $request, $fileFolderName, $oldFileName)
    {
        if ($request->hasFile('file')) {
            if ($oldFileName) {
                File::delete($oldFileName);
            }
            return static::create($request, $fileFolderName);
        }
        return $oldFileName;
    }

    public static function delete($fileName)
    {
        File::delete($fileName);
    }
}
