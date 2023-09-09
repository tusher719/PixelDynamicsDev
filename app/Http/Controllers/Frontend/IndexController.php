<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMessage;
use App\Mail\Mail;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Contact;
use App\Models\PortfolioCategory;
use App\Models\PortfolioManage;
use App\Models\PortfolioSubCategory;
use App\Models\ServiceOffers;
use App\Models\ServiceSubcription;
use App\Models\SiteSetting;
use App\Models\TeamCarousel;
use App\Models\TeamMembers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;

class IndexController extends Controller
{
    // Portfolio Page View
    public function Portfolio() {
        $category = PortfolioCategory::all();
        $subcategory = PortfolioSubCategory::all();
        $portfolio = PortfolioManage::where('status',1)->latest()->get();
        $portfolio = PortfolioManage::where('status',1)->orderBy('serial_id', 'ASC')->get();
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


    // Category Wise Blog
    public function CatWiseBlog($cat_id, $slug) {
        $catpost = Blog::where('category_id', $cat_id)->get();
        $category = BlogCategory::orderBy('category_name')->get();
        $blogcat = BlogCategory::orderBy('category_name', 'ASC')->get();
        $recentPost = Blog::latest()->limit(5)->get();
        $blog = Blog::where('status',1)->get();
        return view('frontend.blog.cat_wise.blog_cat', compact('catpost','category','recentPost','blog','blogcat'));
    }


    // Contact Page View
    public function Contact() {
        $siteSetting = SiteSetting::first();
        return view('frontend.contacts.contact', compact('siteSetting'));
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


        
        
        $mailData = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'service' => $request->service,
            'message' => $request->message,
        ]);
        FacadesMail::to('contactpixeldynamics@gmail.com')->send(new ContactMessage($mailData));
        $notification = array(
            'message' => 'Message Sent Successfully',
            'alert-type' => 'success',
        );
        
        return redirect()->back()->with($notification);
    }



}
