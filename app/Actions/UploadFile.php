<?php

namespace App\Actions;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UploadFile
{
    public static function create(Request $request, $fileFolderName)
    {
        $date = date('Y-m-d');
        $fileName = $request->file->getClientOriginalName();
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
            return static::create($request,$fileFolderName);
        }
        return $oldFileName;
    }

    public static function delete($fileName)
    {
        File::delete($fileName);
    }
}
