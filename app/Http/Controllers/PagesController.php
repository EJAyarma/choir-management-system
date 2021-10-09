<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function aboutUs()
    {
        return view('pages.about-us');
    }

    public function cart()
    {
        return view('pages.cart');
    }

    public function events()
    {
        return view('pages.events');
    }

    public function seekHelp()
    {
        return view('pages.seek-help');
    }

    public function blogGrid()
    {
        return view('pages.blog-grid');
    }

    public function counseling()
    {
        return view('pages.counseling');
    }

    public function blogPost()
    {
        return view('pages.blog-post');
    }

    public function checkout()
    {
        return view('pages.checkout');
    }

    public function classicBlog()
    {
        return view('pages.classic-blog');
    }

    public function classicBlogWithoutSidebar()
    {
        return view('pages.classic-blog-without-sidebar');
    }

    public function contactUs()
    {
        return view('pages.contact-us');
    }

    public function comingSoon()
    {
        return view('pages.coming-soon');
    }

    public function donations()
    {
        return view('pages.donations');
    }

    public function shop()
    {
        return view('pages.shop');
    }

    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    public function searchResults()
    {
        return view('pages.search-results');
    }

    public function songCategories()
    {
        return view('pages.song-categories');
    }

    public function songs()
    {
        return view('pages.songs');
    }

    public function singleDonation()
    {
        return view('pages.single-donation');
    }

    public function singleProduct()
    {
        return view('pages.single-product');
    }

    public function singleSong()
    {
        return view('pages.single-song');
    }

    public function teamMember()
    {
        return view('pages.team-member');
    }

    public function typography()
    {
        return view('pages.typography');
    }
}
