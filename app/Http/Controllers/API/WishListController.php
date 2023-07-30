<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\MyBookResource;
use App\Http\Resources\API\SuccessResource;
use App\Models\WishList;
use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function audioBook()
    {
        $wishListAudioBook = WishList::with('book')->where('user_id', auth()->user()->id)->whereHas('book', function ($book) {
            $book->where('audio', '!=', null);
        })->get();
        return MyBookResource::collection($wishListAudioBook);
    }

    public function book()
    {
        $wishListBook = WishList::with('book')->where('user_id', auth()->user()->id)->whereHas('book', function ($book) {
            $book->where('audio', null);
        })->get();
        return MyBookResource::collection($wishListBook);
    }

    public function store(Request $request)
    {
        $book = WishList::where('user_id', auth()->user()->id)->where('book_id', $request->book_id)->first();
        if ($book) {
            $book->delete();
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
