<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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



    /*==================================================
    ==================|| Blog Method ||=================
    ==================================================*/

    public function AllBlog() {
        $blog = Blog::latest()->get();
        return view('backend.blog.manage_blog', compact('blog'));
    }



    public function AddBlog() {
        $blogcat = BlogCategory::orderBy('category_name', 'ASC')->get();
        return view('backend.blog.add_blog', compact('blogcat'));
    }



    // Store Blog Post Method
    public function StoreBlog(Request $request) {
        
        // dd($request->all());
        // Validation
        $request->validate([
            'blog_name' => 'required',
            'category_id' => 'required',
            'blog_img' => 'required|mimes:jpeg,png,jpg,gif|max:5120',
            'blog_details' => 'required',
        ]);
        
        $imageName = time().'.'.$request->blog_img->extension();
        $request->blog_img->move(public_path('uploads/blog'), $imageName);

        $blog = new Blog();
        $blog->blog_img = $imageName;
        $blog->user_id = Auth::user()->id;
        $blog->blog_name = $request->blog_name;
        $blog->blog_name_slug = strtolower(str_replace(' ', '-',$request->blog_name));
        $blog->category_id = $request->category_id;
        $blog->blog_details = $request->blog_details;
        $blog->status = 1;
        $blog->save();

        $notification = array(
            'message' => 'Blog Post Created Successfully',
            'alert-type' =>'success',
        );
        
        return redirect()->route('all.blog')->with($notification);
    }




    // Edit Blog Method
    public function EditBlog($id){

        $category = BlogCategory::latest()->get();
        $blog = Blog::findOrFail($id);
        return view('backend.blog.Edit_blog', compact('category','blog'));

    } // End Method




    // Portfolio Update Permission
    public function UpdateBlog(Request $request, $id){

        // $request->validate([
        //     'blog_name' => 'required|unique',
        //     'category_id' => 'required',
        //     'blog_details' => 'required',
        // ]);

        $blog = Blog::where('id', $id)->first();

        if (isset($request->blog_img)) {

            $imageName = time().'.'.$request->blog_img->extension();
            $request->blog_img->move(public_path('uploads/blog'), $imageName);
            $blog->blog_img = $imageName;
        }

        $blog->blog_name = $request->blog_name;
        $blog->blog_name_slug = strtolower(str_replace(' ', '-',$request->blog_name));
        $blog->category_id = $request->category_id;
        $blog->blog_details = $request->blog_details;

        $blog->save();

        $notification = array(
            'message' => 'Blog Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.blog')->with($notification);

    } // End Method





    // Delete Permission
    public function DeleteBlog($id){

        $data = Blog::find($id);

        $img_path = public_path('uploads/blog/'.$data->blog_img);
        if (file_exists($img_path)) {
            unlink($img_path);
        }

        $data->delete();

        $notification = array(
            'message' => 'blog Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);

    }




    
    // Product Active Inactive
    public function InactiveBlog($id)
    {
        Blog::findOrFail($id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Blog Inactive',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }

    public function ActiveBlog($id)
    {
        Blog::findOrFail($id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Blog Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // end method


    
}
