<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorit extends Model
{
    use HasFactory;

    protected $fillable = ['favorit_id', 'model_name', 'user_id'];


    public function favorit()
    {
        return $this->morphTo('favorit', 'model_name', 'favorit_id');
    }

}
