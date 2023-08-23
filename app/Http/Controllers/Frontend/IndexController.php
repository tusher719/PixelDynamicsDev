<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PortfolioCategory;
use App\Models\PortfolioManage;
use App\Models\PortfolioSubCategory;
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
        return view('frontend.services.service');
    }


    // Service Page View
    public function Team() {
        return view('frontend.teams.team');
    }


    // Service Page View
    public function Blog() {
        return view('frontend.blog.blog');
    }


    // Service Page View
    public function Contact() {
        return view('frontend.contacts.contact');
    }


    // Service Page View
    public function BlogMain() {
        return view('frontend.blog.blog_main');
    }


}
