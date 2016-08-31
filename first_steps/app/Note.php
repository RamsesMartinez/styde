<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //protected $fillable = ['title', 'note'];
    protected $fillable = ['note'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}