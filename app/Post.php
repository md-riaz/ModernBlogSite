<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'category_id', 'post_img', 'details',
    ];

    // A post can belongs to a auther
    public function user()
    {
        return $this->belongsTo(User::class); // Select * from posts where user_id = current user
    }

    // A post has a category
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    // A tag may have many posts
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
