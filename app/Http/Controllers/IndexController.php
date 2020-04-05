<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        if (request('tag')) {
            $posts = Tag::where('name', request('tag'))->firstOrFail()->posts;
        } else {
            $posts = Post::latest('updated_at')->paginate(7);
        }

        return view('index', compact('posts'));
    }


    public function CategoryPosts()
    {
        $category_id = Category::where('slug', request('slug'))->first()->id;
        $posts = Post::where('category_id', $category_id)->get();
        return view('index', compact('posts'));
    }
}
