<?php

namespace App\Http\Controllers\Admin;

use App\Actions\CRUD;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $modelName = 'App\Models\Category';

    public function index()
    {
        $categories = Category::get();
        return view('Admin.Crud.category', compact('categories'));
    }

    public function store(Request $request)
    {
        CRUD::create($this->modelName, $request);
        return back()->with('success', 'Maglumat üstünlikli goşuldy');
    }
    public function update(Request $request, $id)
    {
        CRUD::update($this->modelName, $request, $id);
        return redirect()->route('categories.index')->with('success', 'Maglumat üstünlikli üýtgedildi');
    }
    public function destroy($id)
    {
        CRUD::delete($this->modelName, $id);
        return back()->with('success', 'Maglumat üstünlikli pozuldy');
    }

    public function selectDeleteCategories()
    {
        Category::destroy(request('id'));
        return response()->json("success",200);
    }
}
