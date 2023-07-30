<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\MyBookResource;
use App\Http\Resources\API\SuccessResource;
use App\Models\ReadBook;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReadBookController extends Controller
{
    // Today

    public function todayAudioBook()
    {
        $wishListAudioBook = ReadBook::with('book')
            ->where('user_id', auth()->user()->id)
            ->whereDate('created_at', Carbon::today())
            ->whereHas('book', function ($book) {
                $book->where('audio', '!=', null);
            })->get();
        return MyBookResource::collection($wishListAudioBook);
    }


    public function todayBook()
    {
        $wishListBook = ReadBook::with('book')
            ->where('user_id', auth()->user()->id)
            ->whereDate('created_at', Carbon::today())
            ->whereHas('book', function ($book) {
                $book->where('audio', null);
            })->get();
        return MyBookResource::collection($wishListBook);
    }


    // All

    public function audioBook()
    {
        $wishListAudioBook = ReadBook::with('book')
        ->where('user_id', auth()->user()->id)
        ->whereHas('book', function ($book) {
            $book->where('audio', '!=', null);
        })->get();
    return MyBookResource::collection($wishListAudioBook);
    }

    public function book()
    {
        $wishListBook = ReadBook::with('book')
            ->where('user_id', auth()->user()->id)
            ->whereHas('book', function ($book) {
                $book->where('audio', null);
            })->get();
        return MyBookResource::collection($wishListBook);
    }


    public function store(Request $request)
    {
        $book = ReadBook::where('user_id', auth()->user()->id)->where('book_id', $request->id)->first();
        if ($book) {
            return SuccessResource::make([
                'success_code' => 200,
                'message' => 'Bu eyyam hasapda!'
            ]);
        }
        ReadBook::create([
            'user_id' => auth()->user()->id,
            'book_id' => $request->book_id
        ]);

        return SuccessResource::make([
            'success_code' => 200,
            'message' => 'Hasaba alyndy!'
        ]);
    }
}
