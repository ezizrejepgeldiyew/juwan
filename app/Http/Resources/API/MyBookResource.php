<?php

namespace App\Http\Resources\API;

use App\Models\BookMark;
use App\Models\Favorit;
use App\Models\WishList;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MyBookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this['book']['id'],
            'name'    => $this['book']['name'],
            'photo' => $this['book']['photo'],
            'isWishList' => WishList::where('user_id', auth()->user()->id)->where('book_id', $this['book']['id'])->count() != 0 ? true : false,
            'isBookMark' => BookMark::where('user_id', auth()->user()->id)->where('book_id', $this['book']['id'])->count() != 0 ? true : false,

        ];
    }
}
