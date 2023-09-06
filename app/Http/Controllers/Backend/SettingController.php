<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //

    public function Settings(){
        $siteSetting = SiteSetting::first();
        return view('backend.setting.settings', compact('siteSetting'));
    }



    // Logo Update Method
    public function StoreLogo(Request $request) {

        $setting_id = $request->id;
        
        $data = SiteSetting::find($setting_id);
        $data->desc = $request->desc;

        if($request->file('sitelogo')){
            $file = $request->file('sitelogo');
            @unlink(public_path('uploads/logo/'.$data->sitelogo));
            $filename = date('YmdHi').'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/logo'),$filename);
            $data['sitelogo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Site Logo Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);

    } // End Method


    public function StoreSocial(Request $request) {

        $setting_id = $request->id;
        SiteSetting::FindOrFail($setting_id)->update([
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
            'insta' => $request->insta,
            'twitter' => $request->twitter,
            'artstation' => $request->artstation,
            'behance' => $request->behance,
        ]);

        $notification = array(
            'message' => 'Social Link Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);

    } // End Method


}
