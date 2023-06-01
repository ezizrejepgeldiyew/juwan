<?php

namespace App\Http\Controllers\Admin;

use App\Actions\CRUD;
use App\Http\Controllers\Controller;
use App\Http\Requests\PodkastRequest;
use App\Models\Author;
use App\Models\Category;
use App\Models\Podkast;
use Illuminate\Http\Request;

class PodkastController extends Controller
{
    protected $modelName = 'App\Models\Podkast';
    protected $audioFolderName = 'podkast';

    public function index()
    {
        $categories = Category::get();
        $authors = Author::get();
        $podkasts = Podkast::with('category', 'author')->get();
        return view('Admin.Crud.podkast', compact('podkasts', 'categories', 'authors'));
    }

    public function store(PodkastRequest $request)
    {
        CRUD::create($this->modelName, $request, null, $this->audioFolderName);
        return back()->with('success', 'Maglumat üstünlikli goşuldy');
    }

    public function update(PodkastRequest $request, $id)
    {
        CRUD::update($this->modelName, $request, $id, null, $this->audioFolderName);
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
