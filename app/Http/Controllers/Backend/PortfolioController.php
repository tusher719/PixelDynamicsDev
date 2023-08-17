<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use App\Models\PortfolioSubCategory;
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








    /*==================================================================
            ===============|| Sub-Category Method ||===============
    ====================================================================*/

    // Sub-Category Page View
    public function PortfolioSubcategory(){
        $category = PortfolioCategory::all();
        $subcategory = PortfolioSubCategory::all();
        Return view('portfolio.sub_category.sub_category', compact('category','subcategory'));
    } // End Method



    // Sub-Category Store Method
    public function StoreSubcategory(Request $request) {

        // Valiation
        $request->validate([
            'category_id' => 'required',
            'subcategory_name' => 'required',
        ]);

        $category = PortfolioSubCategory::create([

            'category_id' => $request->category_id,
            'subcategory_name' => Str::ucfirst($request->subcategory_name),
            'subcategory_slug' => strtolower(str_replace(' ', '-',$request->subcategory_name)),
        ]);

        $notification = array(
            'message' => 'Sub-Category Created Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    } // End Method



    // Sub-Category Edit Permission
    public function EditSubcategory($id){

        $subcategory = PortfolioSubCategory::findOrFail($id);
        $category = PortfolioCategory::latest()->get();
        return view('portfolio.sub_category.edit_subcategory', compact('subcategory','category'));

    } // End Method



    // Sub-Category Update Permission
    public function UpdateSubcategory(Request $request){

        $subcat_id = $request->id;

        PortfolioSubCategory::FindOrFail($subcat_id)->update([
            'category_id' => $request->category_id,
            'subcategory_name' => Str::ucfirst($request->subcategory_name),
            'subcategory_slug' => strtolower(str_replace(' ', '-',$request->subcategory_name)),
        ]);

        $notification = array(
            'message' => 'Sub-Category Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.subcategory')->with($notification);

    } // End Method



    // Delete Permission
    public function DeleteSubcategory($id){

        PortfolioSubCategory::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Sub-Category Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);

    }



}
