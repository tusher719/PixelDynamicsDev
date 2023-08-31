<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Contact;
use App\Models\PortfolioCategory;
use App\Models\PortfolioManage;
use App\Models\PortfolioSubCategory;
use App\Models\ServiceOffers;
use App\Models\ServiceSubcription;
use App\Models\TeamCarousel;
use App\Models\TeamMembers;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // Portfolio Page View
    public function Portfolio() {
        $category = PortfolioCategory::all();
        $subcategory = PortfolioSubCategory::all();
        $portfolio = PortfolioManage::where('status',1)->latest()->get();
        return view('frontend.portfolio.portfolio', compact('category', 'subcategory', 'portfolio'));
    } // End Method


    public function PortfolioPost($id) {
        $post = PortfolioManage::findOrFail($id);
        return view('frontend.portfolio.portfolio_post', compact('post'));
    }



    // Service Page View
    public function Services() {
        $offers = ServiceOffers::where('status',1)->get();
        $subscription = ServiceSubcription::where('status',1)->get();
        return view('frontend.services.service', compact('offers','subscription'));
    }


    // Service Page View
    public function Team() {
        $teamcaro = TeamCarousel::where('status',1)->get();
        $members = TeamMembers::where('status',1)->get();
        return view('frontend.teams.team', compact('teamcaro','members'));
    }


    // Blog Page View
    public function Blog() {
        $blogcat = BlogCategory::orderBy('category_name', 'ASC')->get();
        $blog = Blog::where('status',1)->get();
        return view('frontend.blog.blog', compact('blog','blogcat'));
    }


    // Blog-Main Page View
    public function BlogMain($id) {
        $blogcat = BlogCategory::orderBy('category_name', 'ASC')->get();
        $blog = Blog::findOrFail($id);
        return view('frontend.blog.blog_main', compact('blog','blogcat'));
    }


    // Contact Page View
    public function Contact() {
        return view('frontend.contacts.contact');
    }

    // Store Contact
    public function Message(Request $request) {

        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'service' => 'required',
            'message' => 'required',
        ],[
            'name.required' => 'Please Enter Your Name',
            'email.required' => 'Please Enter Email Address',
            'service.required' => 'Please Select Service',
            'message.required' => 'Please Enter Your Message',
        ]);


        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'service' => $request->service,
            'message' => $request->message,
        ]);
        $notification = array(
            'message' => 'Message Sent Successfully',
            'alert-type' => 'success',
        );
        
        return redirect()->back()->with($notification);
    }



}
