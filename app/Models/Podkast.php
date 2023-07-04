<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podkast extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'genre_id', 'photo', 'audio', 'description'];
    // protected $with = ['genre'];

    // RELATION

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }

    // MUTATOR

    protected function description(): Attribute
    {
        return Attribute::make(
            get: fn ($description) => is_null($description) ? '-' : $description,
        );
    }

}
