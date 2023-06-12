<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostPhoto extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'photos', 'description'];
    protected $with = ['category'];

    // RELATION

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function post()
    {
        return $this->morphMany(Post::class, 'relation');
    }

    public function favorit()
    {
        return $this->morphMany(Favorit::class, 'favorit');
    }

    // MUTATOR

    protected function photos(): Attribute
    {
        return Attribute::make(
            get: fn ($photos) => json_decode($photos),
        );
    }
}
