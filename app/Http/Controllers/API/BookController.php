<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\API\BookResource;
use App\Http\Resources\API\BookResources;
use App\Http\Resources\API\CountBookResource;
use App\Http\Resources\API\MyBookResource;
use App\Models\Book;
use App\Models\Category;
use App\Models\Favorit;
use App\Models\ReadBook;
use App\Models\WishList;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $data = Book::with('category', 'author')->get();
        return response()->json(compact('data'), 200);
    }

    public function selectBook($id)
    {
        $data = Book::with('category', 'author')->find($id);
        return response()->json(compact('data'), 200);
    }

    public function category()
    {
        $bookCategoryId = Book::select('category_id')->groupBy('category_id')->get()->pluck('category_id');
        $data = Category::find($bookCategoryId);
        return response()->json(compact('data'), 200);
    }

    public function search()
    {
        $search = request('search');
        $data = Book::with('author', 'genre')->where('name', 'like', '%' . $search . '%')
            ->orWhereHas('author', function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })->orWhereHas('genre', function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })->get();
        return response()->json(compact('data'), 200);
    }

    public function count()
    {
        $wishListAudioBook = WishList::where('user_id', auth()->user()->id)
            ->whereHas('book', function ($query) {
                $query->where('audio', '!=', null);
            })->count();
        $wishListBook = WishList::where('user_id', auth()->user()->id)
            ->whereHas('book', function ($query) {
                $query->where('audio', null);
            })->count();
        $data['wish_list'] = CountBookResource::make([
            'audio_book' => $wishListAudioBook,
            'book' => $wishListBook,
        ]);

        $readAudioBookToday = ReadBook::where('user_id', auth()->user()->id)
            ->whereDate('created_at', Carbon::today())
            ->whereHas('book', function ($query) {
                $query->where('audio', '!=', null);
            })->count();
        $readBookToday = ReadBook::where('user_id', auth()->user()->id)
            ->whereDate('created_at', Carbon::today())
            ->whereHas('book', function ($query) {
                $query->where('audio', null);
            })->count();
        $data['read_book']['today'] = CountBookResource::make([
            'audio_book' => $readAudioBookToday,
            'book' => $readBookToday,
        ]);

        $readAudioBookAll = ReadBook::where('user_id', auth()->user()->id)
            ->whereHas('book', function ($query) {
                $query->where('audio', '!=', null);
            })->count();
        $readBookAll = ReadBook::where('user_id', auth()->user()->id)
            ->whereHas('book', function ($query) {
                $query->where('audio', null);
            })->count();
        $data['read_book']['all'] = CountBookResource::make([
            'audio_book' => $readAudioBookAll,
            'book' => $readBookAll,
        ]);

        $favorit = Favorit::with('favorit')->where('user_id', auth()->user()->id)->where('model_name', 'App\Models\PostBook')->get();
        $countAudioBook = 0;
        $countBook = 0;
        foreach($favorit as $item ) {
            Book::where('id',$item->favorit->book_id)->where('audio', '!=', null)->first() ? $countAudioBook++ : $countBook++;
        }
        $data['favorit'] = CountBookResource::make([
            'book' => $countBook,
            'audio_book' => $countAudioBook
        ]);

        return response()->json(compact('data'), 200);
    }
}
