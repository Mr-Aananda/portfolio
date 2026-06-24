<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('frontend.pages.about');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    // Individual section pages
    public function skills()
    {
        return view('frontend.pages.skills');
    }

    public function projects()
    {
        return view('frontend.pages.projects');
    }

    public function blogs()
    {
        return view('frontend.pages.blogs');
    }

    public function privacy()
    {
        return view('frontend.pages.privacy');
    }

    public function terms()
    {
        return view('frontend.pages.terms');
    }

    public function sitemap()
    {
        return view('frontend.pages.sitemap');
    }
}
