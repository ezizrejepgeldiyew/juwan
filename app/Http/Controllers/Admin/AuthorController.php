<?php

namespace App\Http\Controllers\Admin;

use App\Actions\CRUD;
use App\Models\Author;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthorController extends Controller
{

    public function index()
    {
        $authors = Author::get();
        return view('Admin.author', compact('authors'));
    }

    public function store(Request $request)
    {
        Author::create($request->all());
        return back()->with('success', 'Maglumat üstünlikli goşuldy');
    }
    public function update(Request $request, Author $author)
    {
        $author->update($request->all());
        return redirect()->route('authors.index')->with('success', 'Maglumat üstünlikli üýtgedildi');
    }
    public function destroy(Author $author)
    {
        $author->delete();
        return back()->with('success', 'Maglumat üstünlikli pozuldy');
    }

    public function selectDeleteAuthors()
    {
        Author::destroy(request('id'));
        return response()->json("success",200);
    }
}
