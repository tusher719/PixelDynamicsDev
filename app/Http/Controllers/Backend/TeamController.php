<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TeamCarousel;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    // All Carousel Manage Page view
    public function AllCarouselManage() {
        $caro = TeamCarousel::latest()->get();
        return view('backend.team.carousel.manage_carousel', compact('caro'));
    }


    // All Carousel Manage Page view
    public function AddCarousel() {
        return view('backend.team.carousel.add_carousel');
    }



    // All Carousel Store Method
    public function StoreCarousel(Request $request) {

        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'industry' => 'required',
            'area' => 'required',
            'industry_experience' => 'required',
            'area_experience' => 'required',
            'member_img' => 'required|mimes:jpeg,png,jpg,gif|max:512',
            'description' => 'required',
            'description2' => 'required',
        ]);

        $imageName = time().'.'.$request->member_img->extension();
        $request->member_img->move(public_path('uploads/members/carousel'), $imageName);

        $portfolio = new TeamCarousel();
        $portfolio->member_img = $imageName;
        $portfolio->name = $request->name;
        $portfolio->title = $request->title;
        $portfolio->industry = $request->industry;
        $portfolio->area = $request->area;
        $portfolio->industry_experience = $request->industry_experience;
        $portfolio->area_experience = $request->area_experience;
        $portfolio->description = $request->description;
        $portfolio->description2 = $request->description2;
        $portfolio->status = 1;

        $portfolio->save();

        $notification = array(
            'message' => 'Team Carousel Added Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.carousel.manage')->with($notification);
    } // End Method



    // All Carousel Edit Method
    public function EditCarousel($id){

        $caro = TeamCarousel::findOrFail($id);
        return view('backend.team.carousel.edit_carousel', compact('caro'));

    } // End Method


    // All Carousel Update Method
    public function UpdateCarousel(Request $request, $id) {

        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'industry' => 'required',
            'area' => 'required',
            'industry_experience' => 'required',
            'area_experience' => 'required',
        ]);


        $teamcaro = TeamCarousel::where('id', $id)->first();

        if (isset($request->member_img)) {

            $imageName = time().'.'.$request->member_img->extension();
            $request->member_img->move(public_path('uploads/members/carousel'), $imageName);
            $teamcaro->member_img = $imageName;
        }

        $teamcaro->name = $request->name;
        $teamcaro->title = $request->title;
        $teamcaro->industry = $request->industry;
        $teamcaro->area = $request->area;
        $teamcaro->industry_experience = $request->industry_experience;
        $teamcaro->area_experience = $request->area_experience;
        $teamcaro->description = $request->description;
        $teamcaro->description2 = $request->description2;

        $teamcaro->save();

        $notification = array(
            'message' => 'Team Carousel Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.carousel.manage')->with($notification);
    } // End Method




    // Delete Permission
    public function DeleteCarousel($id){

        $data = TeamCarousel::find($id);

        $img_path = public_path('uploads/members/carousel/'.$data->member_img);
        if (file_exists($img_path)) {
            unlink($img_path);
        }

        $data->delete();

        $notification = array(
            'message' => 'Team Carousel Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);

    }



    // Product Active Inactive
    public function InactiveCarousel($id)
    {
        TeamCarousel::findOrFail($id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Portfolio Inactive',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }

    public function ActiveCarousel($id)
    {
        TeamCarousel::findOrFail($id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Portfolio Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // end method


}
