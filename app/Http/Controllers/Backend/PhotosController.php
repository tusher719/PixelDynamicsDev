<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Photos;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    //
    public function AllPhotos() {
        $photos = Photos::orderBy('id','DESC')->get();
        return view('backend.photos.all_photos', compact('photos'));
    }


    // photos Store
    public function StorePhotos(Request $request) {
        
        // dd($request->all());
        $request->validate([
            'photos' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // $imageName = time().'.'.$request->photos->extension();
        $imageName = time().'_'.$request->photos->getClientOriginalName();
        $request->photos->move(public_path('uploads/photos'), $imageName);

        $photorm = new Photos();
        $photorm->photos = $imageName;
        $photorm->status = 1;

        $photorm->save();

        $notification = array(
            'message' => 'Photos Added Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.photos')->with($notification);
    }



    // Delete Permission
    public function DeletePhotos($id){

        $data = Photos::find($id);

        $img_path = public_path('uploads/photos/'.$data->photos);
        if (file_exists($img_path)) {
            unlink($img_path);
        }

        $data->delete();

        $notification = array(
            'message' => 'Photos Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);

    }
}
