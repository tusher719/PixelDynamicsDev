<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ServiceOffers;
use App\Models\ServiceSubcription;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // ALL Offers Manage page view
    public function AllOffers() {

        $offers = ServiceOffers::latest()->get();
        return view('backend.services.offer.manage_offers', compact('offers'));
    }


    // Add Offers page view
    public function AddOffers() {
        return view('backend.services.offer.add_offer');
    }


    // Store Offers
    public function StoreOffers(Request $request) {
        
        // Valiation
        $request->validate([
            'title' => 'required',
        ]);

        ServiceOffers::create([

            'title' => $request->title,
            'offer' => $request->offer,
            'offer2' => $request->offer2,
            'offer3' => $request->offer3,
            'offer4' => $request->offer4,
            'offer5' => $request->offer5,
            'offer6' => $request->offer6,
            'offer7' => $request->offer7,
            'offer8' => $request->offer8,
            'offer9' => $request->offer9,
            'offer10' => $request->offer10,
            'offer11' => $request->offer11,
            'offer12' => $request->offer12,
            'offer13' => $request->offer13,
            'offer14' => $request->offer14,
            'offer15' => $request->offer15,
            'status' => 1,
        ]);

        $notification = array(
            'message' => 'Offer Created Successfully',
            'alert-type' => 'success',
        );
        
        return redirect()->route('all.offers')->with($notification);
    } // End Method



    // Edit Offer
    public function EditOffers($id){

        $offers = ServiceOffers::findOrFail($id);
        return view('backend.services.offer.edit_offer', compact('offers'));

    } // End Method

    // Category Update Permission
    public function UpdateOffers(Request $request){

        $offer_id = $request->id;

        // dd($request->all());

        ServiceOffers::FindOrFail($offer_id)->update([
            'title' => $request->title,
            'offer' => $request->offer,
            'offer2' => $request->offer2,
            'offer3' => $request->offer3,
            'offer4' => $request->offer4,
            'offer5' => $request->offer5,
            'offer6' => $request->offer6,
            'offer7' => $request->offer7,
            'offer8' => $request->offer8,
            'offer9' => $request->offer9,
            'offer10' => $request->offer10,
            'offer11' => $request->offer11,
            'offer12' => $request->offer12,
            'offer13' => $request->offer13,
            'offer14' => $request->offer14,
            'offer15' => $request->offer15,
        ]);

        $notification = array(
            'message' => 'Offer Update Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.offers')->with($notification);

    } // End Method


    // Delete Permission
    public function DeleteOffers($id){

        ServiceOffers::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Offer Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);

    }



    // Product Active Inactive
    public function InactiveOffers($id)
    {
        ServiceOffers::findOrFail($id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Offer Inactive',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }

    public function ActiveOffers($id)
    {
        ServiceOffers::findOrFail($id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Offer Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /*================================================================================
    ============================|| All Subscription ||================================
    ================================================================================*/


    public function AllSubscription() {
        $subscription = ServiceSubcription::latest()->get();
        return view('backend.services.subcription.manage_subcription', compact('subscription'));
    }


    public function AddSubscription() {
        return view('backend.services.subcription.add_subcription');
    }



    // Store Subscription
    public function StoreSubscription(Request $request) {
        
        // Valiation
        $request->validate([
            'title' => 'required',
            'amount' => 'required',
        ]);

        ServiceSubcription::create([

            'title' => $request->title,
            'amount' => $request->amount,
            'offer' => $request->offer,
            'offer2' => $request->offer2,
            'offer3' => $request->offer3,
            'offer4' => $request->offer4,
            'offer5' => $request->offer5,
            'offer6' => $request->offer6,
            'offer7' => $request->offer7,
            'offer8' => $request->offer8,
            'offer9' => $request->offer9,
            'offer10' => $request->offer10,
            'offer11' => $request->offer11,
            'offer12' => $request->offer12,
            'offer13' => $request->offer13,
            'offer14' => $request->offer14,
            'offer15' => $request->offer15,
            'status' => 1,
        ]);

        $notification = array(
            'message' => 'Subscription Created Successfully',
            'alert-type' => 'success',
        );
        
        return redirect()->route('all.subscription')->with($notification);
    } // End Method


    // Edit Offer
    public function EditSubscription($id){

        $subscription = ServiceSubcription::findOrFail($id);
        return view('backend.services.subcription.edit_subcription', compact('subscription'));

    } // End Method

    // Category Update Permission
    public function UpdateSubscription(Request $request){

        $offer_id = $request->id;
        ServiceSubcription::FindOrFail($offer_id)->update([
            'title' => $request->title,
            'amount' => $request->amount,
            'offer' => $request->offer,
            'offer2' => $request->offer2,
            'offer3' => $request->offer3,
            'offer4' => $request->offer4,
            'offer5' => $request->offer5,
            'offer6' => $request->offer6,
            'offer7' => $request->offer7,
            'offer8' => $request->offer8,
            'offer9' => $request->offer9,
            'offer10' => $request->offer10,
            'offer11' => $request->offer11,
            'offer12' => $request->offer12,
            'offer13' => $request->offer13,
            'offer14' => $request->offer14,
            'offer15' => $request->offer15,
        ]);

        $notification = array(
            'message' => 'Subscription Update Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.subscription')->with($notification);

    } // End Method



    // Delete Permission
    public function DeleteSubscription($id){

        ServiceSubcription::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Subscription Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);

    }



    // Product Active Inactive
    public function InactiveSubscription($id)
    {
        ServiceSubcription::findOrFail($id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Subscription Inactive',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }

    public function ActiveSubscription($id)
    {
        ServiceSubcription::findOrFail($id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Subscription Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


}
