<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function ContactMessage() {
        $message = Contact::latest()->get();
        return view('backend.Message.contact', compact('message'));
    } // End Method


    // Edit Offer
    public function ContactView($id){

        $messageview = Contact::findOrFail($id);
        return view('backend.Message.view', compact('messageview'));

    } // End Method
}
