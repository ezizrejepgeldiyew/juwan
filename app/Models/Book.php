<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'photo', 'category_id', 'author_id', 'ganre_id', 'audio', 'file', 'description'];
    protected $with = ['category'];

    // RELATION

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'ganre_id', 'id');
    }

    public function postBook()
    {
        return $this->hasMany(PostBook::class);
    }

    public function favorit()
    {
        return $this->morphMany(Favorit::class, 'favorit');
    }

    public function readBook()
    {
        return $this->hasMany(ReadBook::class);
    }

    public function wishList()
    {
        return $this->hasMany(WishList::class);
    }

    // MUTATOR



    public static function boot()
    {
        parent::boot();

        static::deleted(function ($book) {
            $book->postBook()->delete();
            $book->readBook()->delete();
            $book->wishList()->delete();
        });
    }
}
