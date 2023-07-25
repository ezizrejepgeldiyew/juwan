<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\SuccessResource;
use App\Models\WishList;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function getAudioBook()
    {
        $data = WishList::with('book')
            ->where('user_id', auth()->user()->id)
            ->whereHas('book', function ($query) {
                $query->where('audio', '!=', null);
            })->get();
        return response()->json(compact('data'), 200);
    }

    public function countAudioBook()
    {
        $data = WishList::where('user_id', auth()->user()->id)
            ->whereHas('book', function ($query) {
                $query->where('audio', '!=', null);
            })->count();
        return response()->json(compact('data'), 200);
    }

    public function getBook()
    {
        $data = WishList::with('book')
            ->where('user_id', auth()->user()->id)
            ->whereHas('book', function ($query) {
                $query->where('audio', null);
            })->get();
        return response()->json(compact('data'), 200);
    }

    public function countBook()
    {
        $data = WishList::where('user_id', auth()->user()->id)
            ->whereHas('book', function ($query) {
                $query->where('audio', null);
            })->count();
        return response()->json(compact('data'), 200);
    }

    public function store(Request $request)
    {
        $book = WishList::where('user_id', auth()->user()->id)->where('book_id', $request->book_id)->first();
        if ($book) {
            return SuccessResource::make([
                'success_code' => 200,
                'message' => 'Hasapdan ayryldy!'
            ]);
        }
        WishList::create([
            'user_id' => auth()->user()->id,
            'book_id' => $request->book_id
        ]);
        return SuccessResource::make([
            'success_code' => 200,
            'message' => 'Hasaba alyndy!'
        ]);
    }
}
