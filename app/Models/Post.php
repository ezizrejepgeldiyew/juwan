<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['relationable_id', 'relationable_type'];
    protected $with = ['relation'];


    public function relation()
    {
        return $this->morphTo('relation','relationable_type','relationable_id');
    }
}
