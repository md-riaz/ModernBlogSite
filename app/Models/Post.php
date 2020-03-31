<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'category_id', 'post_img', 'details'
    ];

    public function joinCategory()
    {
        return $this->belongsTo(Category::class);
    }
}
