<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostBook extends Model
{
    use HasFactory;

    protected $fillable = ['book_id', 'photo', 'category_id', 'author_id', 'name', 'description'];
    protected $with = ['category', 'author'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }

    public function post()
    {
        return $this->morphMany(Post::class, 'relation');
    }

    protected function getPhotoAttribute($photo)
    {
        return 'http://192.168.1.9:1234/'.$photo;
    }
}
