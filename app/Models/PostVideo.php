<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostVideo extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'video', 'description'];
    protected $with = ['category'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function post()
    {
        return $this->morphMany(Post::class,'relation');
    }


}
