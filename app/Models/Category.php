<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function book()
    {
        return $this->hasMany(Book::class);
    }

    public function postBooks()
    {
        return $this->hasMany(PostBook::class);
    }

    public function postPhotos()
    {
        return $this->hasMany(PostPhoto::class);
    }


    public function podkast()
    {
        return $this->hasMany(Podkast::class);
    }

    public function postVideo()
    {
        return $this->hasMany(PostVideo::class);
    }

    public static function boot()
    {
        parent::boot();

        static::deleted(function ($category) {
            $category->book()->delete();
            $category->postBooks()->delete();
            $category->postPhotos()->delete();
            $category->postVideo()->delete();
            $category->podkast()->delete();
        });
    }
}
