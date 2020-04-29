<?php

namespace App\Http\Controllers;


use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categories = Category::paginate(10);
        return view('category.allcategory', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('category.addcategory');
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
            'name' => 'required|max:25|min:1|unique:categories'
        ]);
        $slug = strtolower(str_replace(" ", "-", $request->name));
        // Create a new instance of Category model
        $insert_category = new Category;
        $insert_category->name = $request->name;
        $insert_category->slug = $slug;
        $insert_category->user_id = Auth::user()->id;

        $insert_category->save();

        // If success then return with $notification message
        if ($insert_category) {
            $notification = [
                'message' => 'Successfully Category Inserted',
                'alert-type' => 'success'
            ];
        } else {
            $notification = [
                'message' => 'Error Occurred!',
                'alert-type' => 'error'
            ];
        }
        // Return to previews page
        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('category.viewcategory', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.editcategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:25|min:1|unique:categories,name'.$id,
            'slug' => 'required|max:25|min:1|unique:categories,slug'.$id
        ]);

        $update = Category::findOrFail($id);
        $update->name = $request->name;
        $update->slug = $request->slug;
        $update->user_id = Auth::user()->id;

        $update->save();

        // If success then return with $notification message
        if ($update) {
            $notification = [
                'message' => 'Successfully Category Updated',
                'alert-type' => 'success'
            ];
            return redirect()->to('/category')->with($notification);
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
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {

        $category = Category::findOrFail($id);

        $category->delete();

        if ($category) {
            $notification = [
                'message' => 'Successfully Category Deleted',
                'alert-type' => 'success'
            ];
        }
        return redirect()->back()->with($notification);
    }
}
