<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function WritePost()
    {
        return view('post.writepost');
    }
}
