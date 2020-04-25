<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;
use Mews\Purifier\Facades\Purifier;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth')->except('show');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::paginate(10);
        return view('post.all', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::all();
        return view('post.write', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate input data
        $validatedData = $request->validate([
            'title' => 'required|max:125|min:5',
            'category_id' => 'required|min:1',
            'post_img' => 'image |max:1000',
            'details' => 'required|min:100',

        ]);

        // Create a new instance of Post model
        $insert_post = new Post;
        $insert_post->title = $request->title;
        $insert_post->category_id = $request->category_id;
        $insert_post->details = Purifier::clean($request->details);
        $insert_post->user_id = Auth::user()->id;
        $image = $request->file('post_img');

        if ($image) {
            $image_name = hexdec(uniqid());
            $ext = strtolower($image->getClientOriginalExtension());
            $img_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/frontend/postimg/';
            $img_url = $upload_path . $img_full_name;
            $succes = $image->move($upload_path, $img_full_name);
            if ($succes) {
                $insert_post->post_img = $img_url;
            }
        }
        $insert_post->save();

        // If success then return with $notification message
        if ($insert_post) {
            $notification = [
                'message' => 'Successfully Posted',
                'alert-type' => 'success'
            ];

            return redirect()->to('post')->with($notification);
        } else {
            $notification = [
                'message' => 'Error Occurred!',
                'alert-type' => 'error'
            ];
            // Return to previews page
            return redirect()->back()->with($notification);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Post $post)
    {
        // $category = Post::findOrFail($id);
        $categories = Category::all();
        return view('post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Post $post)
    {
        // Validate input data
        $validatedData = $request->validate([
            'title' => 'required|max:125|min:5',
            'category_id' => 'required|min:1',
            'post_img' => 'image |max:1000',
            'details' => 'required |min:100',
        ]);
        // Create a new instance of Post model
        $update_post = Post::findOrFail($post->id);
        $update_post->title = $request->title;
        $update_post->category_id = $request->category_id;
        $update_post->details = Purifier::clean($request->details);
        $update_post->user_id = Auth::user()->id;
        $image = $request->file('post_img');
        if ($image) {
            $image_name = hexdec(uniqid());
            $ext = strtolower($image->getClientOriginalExtension());
            $img_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/frontend/postimg/';
            $img_url = $upload_path . $img_full_name;
            $succes = $image->move($upload_path, $img_full_name);
            unlink($upload_path . $request->old_img);
            echo $image;
            if ($succes) {
                $update_post->post_img = $img_url;
            }
        } else {
            $update_post->post_img = $request->old_img;
        }
        $update_post->save();

        // If success then return with $notification message
        if ($update_post) {
            $notification = [
                'message' => 'Successfully Posted',
                'alert-type' => 'success'
            ];

            return redirect()->to('post')->with($notification);
        } else {
            $notification = [
                'message' => 'Error Occurred!',
                'alert-type' => 'error'
            ];
            // Return to previews page
            return redirect()->back()->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Post  $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Post $post)
    {
        $select = $post->id;
        $delete = Post::findOrFail($select);
        $delete->delete();
        unlink($post->post_img);
        if ($delete) {
            $notification = [
                'message' => 'Successfully Post Deleted',
                'alert-type' => 'success'
            ];
        }
        return redirect()->back()->with($notification);
    }
}
