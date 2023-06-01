<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'photo', 'category_id', 'author_id', 'ganre_id', 'audio', 'file', 'description'];
    // protected $with = ['category', 'author'];

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

    public static function boot()
    {
        parent::boot();

        static::deleted(function ($book) {
            $book->postBook()->delete();
        });
    }
}
