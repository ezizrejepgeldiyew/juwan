<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'photo', 'category_id', 'author_id', 'ganre_id', 'audio', 'file', 'description', 'is_favorit'];
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

    public function bookMark()
    {
        return $this->hasMany(BookMark::class);
    }

    // MUTATOR

    protected function description(): Attribute
    {
        return Attribute::make(
            get: fn () => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit eos adipisci, atque amet iusto nulla ad fugit. Quas velit, amet ex, cumque nisi nemo accusamus hic natus quo omnis cupiditate repellat suscipit harum neque iure. Illum amet itaque voluptatem placeat doloribus! Sapiente dolorem cumque ab tempora, sed dolor corporis commodi officiis obcaecati eius molestias aspernatur animi! Animi incidunt consequuntur dignissimos cum recusandae! Accusantium quaerat earum, esse laboriosam excepturi est dicta ab perferendis ex eaque sapiente doloribus culpa, cupiditate quisquam corporis blanditiis iure! Nobis, error necessitatibus. Similique tenetur totam vitae cumque voluptatem tempora itaque commodi ipsa culpa, provident repellendus esse reprehenderit?'
        );
    }

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
