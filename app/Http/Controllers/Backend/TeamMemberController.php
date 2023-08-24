<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TeamMembers;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    // All Team Members Page View
    public function AllMemberManage() {
        $members = TeamMembers::latest()->get();
        return view('backend.team.members.manage_members', compact('members'));
    }


    // Add Team Members Page View
    public function AddMember() {
        return view('backend.team.members.add_member');
    }


    // Store Team Members Method
    public function StoreMember(Request $request) {

        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'member_img' => 'required|mimes:jpeg,png,jpg,gif|max:512',
        ]);

        $imageName = time().'.'.$request->member_img->extension();
        $request->member_img->move(public_path('uploads/members/Team'), $imageName);

        $members = new TeamMembers();
        $members->member_img = $imageName;
        $members->name = $request->name;
        $members->position = $request->position;
        $members->role = $request->role;
        $members->job = $request->job;
        $members->job2 = $request->job2;
        $members->job3 = $request->job3;
        $members->job4 = $request->job4;
        $members->job5 = $request->job5;
        $members->job6 = $request->job6;
        $members->status = 1;

        $members->save();

        $notification = array(
            'message' => 'Team Member Added Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.member.manage')->with($notification);
    } // End Method



    // Edit Team Members Page View
    public function EditMember($id) {
        $members = TeamMembers::findOrFail($id);
        return view('backend.team.members.edit_member', compact('members'));
    }


    // Update Team Members Method
    public function UpdateMember(Request $request, $id) {

        // dd($request->all());
        $request->validate([
            'name' => 'required',
        ]);


        $members = TeamMembers::where('id', $id)->first();

        if (isset($request->member_img)) {

            $imageName = time().'.'.$request->member_img->extension();
            $request->member_img->move(public_path('uploads/members/Team'), $imageName);
            $members->member_img = $imageName;
        }

        $members->name = $request->name;
        $members->position = $request->position;
        $members->role = $request->role;
        $members->job = $request->job;
        $members->job2 = $request->job2;
        $members->job3 = $request->job3;
        $members->job4 = $request->job4;
        $members->job5 = $request->job5;
        $members->job6 = $request->job6;

        $members->save();

        $notification = array(
            'message' => 'Team Member Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.member.manage')->with($notification);
    } // End Method



    // Delete Permission
    public function DeleteMember($id){

        $data = TeamMembers::find($id);

        $img_path = public_path('uploads/members/Team/'.$data->member_img);
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
    public function InactiveMember($id)
    {
        TeamMembers::findOrFail($id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Member Inactive',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }

    public function ActiveMember($id)
    {
        TeamMembers::findOrFail($id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Member Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // end method

}
