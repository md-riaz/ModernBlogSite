<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function AddCategory()
    {
        return view('category.addcategory');
    }
    public function AllCategory()
    {
        $categories = DB::table('categories')->get();
        return view('category.allcategory')->with('categories', $categories);
    }
    public function StoreCategory(Request $request)
    {
        // Validate input data
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:25|min:4',
            'slug' => 'required|unique:categories|max:25|min:4'
        ]);

        // Associative array of inputed data with $request parameter 
        $data = [
            'name' => $request->name,
            'slug' => $request->slug
        ];
        // Make a query builder and insert data
        $insert_category = DB::table('categories')->insert($data);
        // If success then return with $notification message 
        if ($insert_category) {
            $notification = [
                'message' => 'Successfully Category Inserted',
                'alert-type' => 'success'
            ];

            return redirect()->route('all.category')->with($notification);
        } else {
            $notification = [
                'message' => 'Error Occurred!',
                'alert-type' => 'error'
            ];
            // Return to previews page
            return redirect()->back()->with($notification);
        }
    }
    public function ViewCategory($id)
    {
        // Select first data from a table where id is $id
        $category = DB::table('categories')->where('id', $id)->first();
        return view('category.viewcategory', compact('category'));
    }
    public function DeleteCategory($id)
    {
        // Delete data from a table where id is $id
        $delete__category = DB::table('categories')->where('id', $id)->delete();
        if ($delete__category) {
            $notification = [
                'message' => 'Successfully Category Deleted',
                'alert-type' => 'success'
            ];
        }
        return redirect()->back()->with($notification);
    }
    public function EditCategory($id)
    {
        // Select first data from a table where id is $id
        $category = DB::table('categories')->where('id', $id)->first();
        return view('category.editcategory')->with('category', $category);
        // return json_encode($category);
    }
    public function UpdateCategory(Request $request, $id)
    {
        $data = [
            'name' => $request->name,
            'slug' => $request->slug
        ];
        $update = DB::table('categories')->where('id', $id)->update($data);

        // If success then return with $notification message 
        if ($update) {
            $notification = [
                'message' => 'Successfully Category Updated',
                'alert-type' => 'success'
            ];

            return redirect()->route('all.category')->with($notification);
        } else {
            $notification = [
                'message' => 'Error Occurred!',
                'alert-type' => 'error'
            ];
            // Return to previews page
            return redirect()->back()->with($notification);
        }
    }
}
