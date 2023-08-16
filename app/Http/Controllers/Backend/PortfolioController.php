<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    // Page View Method
    public function PortfolioCategory(){
        $category = PortfolioCategory::all();
        Return view('portfolio.category.category', compact('category'));
    } // End Method



    // Category Store Method
    public function StoreCategory(Request $request) {

        // Valiation
        $request->validate([
            'category_name' => 'required',
        ]);

        $category = PortfolioCategory::create([

            'category_name' => Str::ucfirst($request->category_name),
            'category_slug' => strtolower(str_replace(' ', '-',$request->category_name)),
        ]);

        $notification = array(
            'message' => 'Category Created Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    } // End Method


    // Category Edit Permission
    public function EditCategory($id){

        $category = PortfolioCategory::findOrFail($id);
        return view('portfolio.category.edit_category', compact('category'));

    } // End Method

    // Category Update Permission
    public function UpdateCategory(Request $request){

        $cat_id = $request->id;

        PortfolioCategory::FindOrFail($cat_id)->update([
            'category_name' => Str::ucfirst($request->category_name),
            'category_slug' => strtolower(str_replace(' ', '-',$request->category_name)),
        ]);

        $notification = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('portfolio.category')->with($notification);

    } // End Method


    // Delete Permission
    public function DeleteCategory($id){

        PortfolioCategory::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);

    }

}
