<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\SuccessResource;
use App\Models\ReadBook;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReadBookController extends Controller
{
    // Today

    public function getTodayAudioBook()
    {
        $data = ReadBook::with('book')
            ->where('user_id', auth()->user()->id)
            ->whereDate('created_at', Carbon::today())
            ->whereHas('book', function ($query) {
                $query->where('audio', '!=', null);
            })->get();
        return response()->json(compact('data'), 200);
    }

    public function countTodayAudioBook()
    {
        $data = ReadBook::where('user_id', auth()->user()->id)
            ->whereDate('created_at', Carbon::today())
            ->whereHas('book', function ($query) {
                $query->where('audio', '!=', null);
            })->count();
        return response()->json(compact('data'), 200);
    }

    public function getTodayBook()
    {
        $data = ReadBook::with('book')
            ->where('user_id', auth()->user()->id)
            ->whereDate('created_at', Carbon::today())
            ->whereHas('book', function ($query) {
                $query->where('audio', null);
            })->get();
        return response()->json(compact('data'), 200);
    }

    public function countTodayBook()
    {
        $data = ReadBook::where('user_id', auth()->user()->id)
            ->whereDate('created_at', Carbon::today())
            ->whereHas('book', function ($query) {
                $query->where('audio', null);
            })->count();
        return response()->json(compact('data'), 200);
    }

    // All

    public function getAudioBook()
    {
        $data = ReadBook::with('book')
            ->where('user_id', auth()->user()->id)
            ->whereHas('book', function ($query) {
                $query->where('audio', '!=', null);
            })->get();
        return response()->json(compact('data'), 200);
    }

    public function countAudioBook()
    {
        $data = ReadBook::where('user_id', auth()->user()->id)
            ->whereHas('book', function ($query) {
                $query->where('audio', '!=', null);
            })->count();
        return response()->json(compact('data'), 200);
    }

    public function getBook()
    {
        $data = ReadBook::with('book')
            ->where('user_id', auth()->user()->id)
            ->whereHas('book', function ($query) {
                $query->where('audio', null);
            })->get();
        return response()->json(compact('data'), 200);
    }

    public function countBook()
    {
        $data = ReadBook::where('user_id', auth()->user()->id)
            ->whereHas('book', function ($query) {
                $query->where('audio', null);
            })->count();
        return response()->json(compact('data'), 200);
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
