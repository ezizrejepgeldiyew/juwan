<?php

namespace App\Actions;

use Illuminate\Http\Request;


class CRUD
{
    public static function create($modelName, Request $request, $photoFolderName = null, $audioFolderName = null, $videoFolderName = null, $fileFolderName = null)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = UploadPhoto::create($request, $photoFolderName);
        }

        if ($request->hasFile('audio')) {
            $data['audio'] = UploadAudio::create($request, $audioFolderName);
        }

        if ($request->hasFile('video')) {
            $data['video'] = UploadVideo::create($request, $videoFolderName);
        }

        if ($request->hasFile('file')) {
            $data['file'] = UploadFile::create($request, $fileFolderName);
        }
        return $modelName::create($data);
    }

    public static function update($modelName, $request, $id, $photoFolderName = null, $audioFolderName = null, $videoFolderName = null, $fileFolderName = null)
    {
        $modelName = $modelName::find($id);
        $data = $request->all();
        if ($modelName->photo) {
            $data['photo'] = UploadPhoto::update($request, $photoFolderName, $modelName->photo);
        }

        if ($modelName->audio) {
            $data['audio'] = UploadAudio::update($request, $audioFolderName, $modelName->audio);
        }

        if ($modelName->video) {
            $data['video'] = UploadVideo::update($request, $videoFolderName, $modelName->video);
        }

        if ($modelName->file) {
            $data['file'] = UploadFile::update($request, $fileFolderName, $modelName->file);
        }
        $modelName->update($data);
    }

    public static function delete($modelName, $id)
    {
        $modelName = $modelName::find($id);
        if ($modelName->photo) {
            UploadPhoto::delete($modelName->photo);
        }

        if ($modelName->audio) {
            UploadAudio::delete($modelName->audio);
        }

        if ($modelName->video) {
            UploadVideo::delete($modelName->video);
        }

        if ($modelName->file) {
            UploadFile::delete($modelName->video);
        }
        $modelName::destroy($id);
    }
}
