<?php

namespace App\Http\Controllers\Admin;

use App\Actions\CRUD;
use App\Http\Controllers\Controller;
use App\Http\Requests\PodkastRequest;
use App\Models\Genre;
use App\Models\Podkast;
use Illuminate\Http\Request;

class PodkastController extends Controller
{
    protected $modelName = 'App\Models\Podkast';
    protected $photoFolderName = 'podkast';
    protected $audioFolderName = 'podkast';

    public function index()
    {
        $genres = Genre::get();
        $podcasts = Podkast::with('genre')->get();
        return view('Admin.Crud.podkast', compact('podcasts', 'genres'));
    }

    public function store(PodkastRequest $request)
    {
        CRUD::create($this->modelName, $request, $this->photoFolderName, $this->audioFolderName);
        return back()->with('success', 'Maglumat üstünlikli goşuldy');
    }

    public function update(Request $request, $id)
    {
        CRUD::update($this->modelName, $request, $id, $this->photoFolderName, $this->audioFolderName);
        return redirect()->route('podkasts.index')->with('success', 'Maglumat üstünlikli üýtgedildi');
    }

    public function delete($id)
    {
        CRUD::delete($this->modelName, $id);
        return back()->with('success', 'Maglumat üstünlikli pozuldy');
    }

    public function selectDeletePodkasts()
    {
        Podkast::destroy(request('id'));
        return response()->json("success", 200);
    }
}
