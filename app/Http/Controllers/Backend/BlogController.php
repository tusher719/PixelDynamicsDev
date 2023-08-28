<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    //
    public function AllBlogCategory() {
        $blogcat = BlogCategory::all();
        return view('backend.blog.blog_category.all_category', compact('blogcat'));
    }
    
    
    // Category Store Method
    public function StoreBlogCategory(Request $request) {
        
        // Valiation
        $request->validate([
            'category_name' => 'required',
        ]);
        
        $category = BlogCategory::create([
            'category_name' => Str::ucfirst($request->category_name),
            'category_slug' => strtolower(str_replace(' ', '-',$request->category_name)),
            'status' => 1,
        ]);
        
        $notification = array(
            'message' => 'Blog Category Created Successfully',
            'alert-type' => 'success',
        );
        
        return redirect()->back()->with($notification);
    } // End Method





    // Category Edit Permission
    public function EditBlogCategory($id){

        $category = BlogCategory::findOrFail($id);
        return view('backend.blog.blog_category.edit_category', compact('category'));

    } // End Method






    // Category Update Permission
    public function UpdateBlogCategory(Request $request){

        $cat_id = $request->id;

        BlogCategory::FindOrFail($cat_id)->update([
            'category_name' => Str::ucfirst($request->category_name),
            'category_slug' => strtolower(str_replace(' ', '-',$request->category_name)),
        ]);

        $notification = array(
            'message' => 'Blog Category Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.blog.category')->with($notification);

    } // End Method



    // Delete Permission
    public function DeleteBlogCategory($id){

        BlogCategory::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Blog Category Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);

    }

}
