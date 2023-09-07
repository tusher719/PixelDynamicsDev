<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use App\Models\PortfolioManage;
use App\Models\PortfolioSubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
// use Intervention\Image\Facades\Image;
use Image;
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
            'category_slug' => strtolower(str_replace(' ', '_',$request->category_name)),
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
            'category_slug' => strtolower(str_replace(' ', '_',$request->category_name)),
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
            ===============|| Sub-Category Method ||====================
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





    /*==================================================================
            ===============|| Portfolio Manage Method ||===============
    ====================================================================*/

    // Manage Page View
    public function PortfolioPortfolio(){
        $category = PortfolioCategory::all();
        $subcategory = PortfolioSubCategory::all();
        $portfolio = PortfolioManage::orderBy('serial_id', 'ASC')->get();
        Return view('portfolio.manage.portfolio_manage', compact('category', 'subcategory','portfolio'));
    } // End Method



    // Add Portfolio
    public function AddPortfolio(){
        $category = PortfolioCategory::all();
        $subcategory = PortfolioSubCategory::all();
        Return view('portfolio.manage.add_portfolio', compact('category', 'subcategory'));
    } // End Method



    // Ajax SubCategory Method
    public function GetSbCategory($category_id){
        $subcat = PortfolioSubCategory::where('category_id', $category_id)->orderBy('subcategory_name', 'ASC')->get();
        return json_encode($subcat);
    }



    // Portfolio Store Method
    public function StorePortfolio(Request $request) {

        // dd($request->all());
        $request->validate([
            'portfolio_name' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'portfolio_img' => 'required|mimes:jpeg,png,jpg,gif|max:1024',
        ]);

        $imageName = time().'.'.$request->portfolio_img->extension();
        $request->portfolio_img->move(public_path('uploads/portfolios'), $imageName);

        $portfolio = new PortfolioManage();
        $portfolio->serial_id = $request->serial_id;
        $portfolio->photo = $imageName;
        $portfolio->portfolio_name = $request->portfolio_name;
        $portfolio->portfolio_name_slug = strtolower(str_replace(' ', '-',$request->portfolio_name));
        $portfolio->category_id = $request->category_id;
        $portfolio->subcategory_id = $request->subcategory_id;
        $portfolio->portfolio_details = $request->portfolio_details;
        $portfolio->status = 1;

        $portfolio->save();

        $notification = array(
            'message' => 'Portfolio Added Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.portfolio')->with($notification);
    } // End Method



    // Portfolio Edit Method
    public function EditPortfolio($id){

        $category = PortfolioCategory::latest()->get();
        $subcategory = PortfolioSubCategory::latest()->get();
        $portfolio = PortfolioManage::findOrFail($id);
        return view('portfolio.manage.edit_portfolio', compact('category','subcategory','portfolio'));

    } // End Method



    // Portfolio Update Permission
    public function UpdatePortfolio(Request $request, $id){

        $request->validate([
            'portfolio_name' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'portfolio_img' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $portfolio = PortfolioManage::where('id', $id)->first();

        if (isset($request->portfolio_img)) {

            $imageName = time().'.'.$request->portfolio_img->extension();
            $request->portfolio_img->move(public_path('uploads/portfolios'), $imageName);
            $portfolio->photo = $imageName;
        }

        $portfolio->serial_id = $request->serial_id;
        $portfolio->portfolio_name = $request->portfolio_name;
        $portfolio->portfolio_name_slug = strtolower(str_replace(' ', '-',$request->portfolio_name));
        $portfolio->category_id = $request->category_id;
        $portfolio->subcategory_id = $request->subcategory_id;
        $portfolio->portfolio_details = $request->portfolio_details;

        $portfolio->save();

        $notification = array(
            'message' => 'Portfolio Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.portfolio')->with($notification);

    } // End Method



    // Delete Permission
    public function DeletePortfolio($id){

        $data = PortfolioManage::find($id);

        $img_path = public_path('uploads/portfolios/'.$data->photo);
        if (file_exists($img_path)) {
            unlink($img_path);
        }

        $data->delete();

        $notification = array(
            'message' => 'Portfolio Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);

    }












    // Product Active Inactive
    public function InactivePortfolio($id)
    {
        PortfolioManage::findOrFail($id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Portfolio Inactive',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }

    public function ActivePortfolio($id)
    {
        PortfolioManage::findOrFail($id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Portfolio Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // end method



}
