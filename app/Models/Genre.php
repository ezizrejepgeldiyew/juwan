<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'photo'];

    public function book()
    {
        return $this->hasMany(Book::class);
    }

    public function podcast()
    {
        return $this->hasMany(Podkast::class);
    }

    public static function boot()
    {
        parent::boot();

        static::deleted(function ($genre) {
            $genre->book()->delete();
            $genre->podcast()->delete();
        });
    }
}
