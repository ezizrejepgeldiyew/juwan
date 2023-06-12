<?php

namespace App\Http\Controllers\Admin;

use App\Actions\CRUD;
use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    protected $modelName = 'App\Models\Genre';
    protected $photoFolderName = 'genre';

    public function index()
    {
        $genres = Genre::get();
        return view('Admin.genre', compact('genres'));
    }

    public function store(Request $request)
    {
        CRUD::create($this->modelName, $request, $this->photoFolderName);
        return back()->with('success', 'Maglumat üstünlikli goşuldy');
    }
    public function update(Request $request, Genre $genre)
    {
        $genre->update($request->all());
        return redirect()->route('genres.index')->with('success', 'Maglumat üstünlikli üýtgedildi');
    }
    public function destroy(Genre $genre)
    {
        $genre->delete();
        return back()->with('success', 'Maglumat üstünlikli pozuldy');
    }

    public function selectDeleteGenres()
    {
        Genre::destroy(request('id'));
        return response()->json("success", 200);
    }
}
