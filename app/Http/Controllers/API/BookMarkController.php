<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\MyBookResource;
use App\Http\Resources\API\SuccessResource;
use App\Models\BookMark;
use Illuminate\Http\Request;

class BookMarkController extends Controller
{
    public function store(Request $request)
    {
        $book = BookMark::where('user_id', auth()->user()->id)->where('book_id', $request->book_id)->first();
        if ($book) {
            $book->delete();
            return SuccessResource::make([
                'success_code' => 200,
                'message' => 'Hasapdan ayryldy!'
            ]);
        }
        BookMark::create([
            'user_id' => auth()->user()->id,
            'book_id' => $request->book_id
        ]);
        return SuccessResource::make([
            'success_code' => 200,
            'message' => 'Hasaba alyndy!'
        ]);
    }

    public function audioBook()
    {
        $bookMarkAudioBook = BookMark::with('book')->where('user_id', auth()->user()->id)->whereHas('book', function ($book) {
            $book->where('audio', '!=', null);
        })->get();
        return MyBookResource::collection($bookMarkAudioBook);
    }

    public function book()
    {
        $bookMarkBook = BookMark::with('book')->where('user_id', auth()->user()->id)->whereHas('book', function ($book) {
            $book->where('audio', null);
        })->get();
        return MyBookResource::collection($bookMarkBook);
    }
}
