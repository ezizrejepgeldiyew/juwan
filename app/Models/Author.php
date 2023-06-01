<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function book()
    {
        return $this->hasMany(Book::class);
    }

    public function postBook()
    {
        return $this->hasMany(PostBook::class);
    }

    public function podkast()
    {
        return $this->hasMany(Podkast::class);
    }

    public static function boot()
    {
        parent::boot();

        static::deleted(function ($author) {
            $author->book()->delete();
            $author->postBook()->delete();
            $author->podkast()->delete();
        });
    }
}
