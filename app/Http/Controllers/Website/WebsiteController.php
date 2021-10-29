<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $data['flag'] = 1;
        return view('Website/Webviews/manage_website_pages',$data);
    }

    public function shop_page()
    {
        $data['flag'] = 2;
        return view('Website/Webviews/manage_website_pages',$data);
    }
    
    public function categories()
    {
        $data['flag'] = 3;
        return view('Website/Webviews/manage_website_pages',$data);
    }
    public function blog_Page()
    {
        $data['flag'] = 4;
        return view('Website/Webviews/manage_website_pages',$data);
        
    }
    public function contacts()
    {
        $data['flag'] = 5;
        return view('Website/Webviews/manage_website_pages',$data);
    }

    public function wishlist()
    {
        $data['flag'] = 6;
        return view('Website/Webviews/manage_website_pages',$data);
    }
    public function cart_page()
    {
        $data['flag'] = 7;
        return view('Website/Webviews/manage_website_pages',$data);
    }

    public function about_page()
    {
        $data['flag'] = 8;
        return view('Website/Webviews/manage_website_pages',$data);
    }

    public function faq_page()
    {
        $data['flag'] = 9;
        return view('Website/Webviews/manage_website_pages',$data);   
    }

    public function registration()
    {
        $data['flag'] = 10;
        return view('Website/Webviews/manage_website_pages',$data);  
    }

    public function login()
    {
        $data['flag'] = 11;
        return view('Website/Webviews/manage_website_pages',$data);
    }

    public function product()
    {
        $data['flag'] = 12;
        return view('Website/Webviews/manage_website_pages',$data);
    }
    public function post_page()
    {
        $data['flag'] = 13;
        return view('Website/Webviews/manage_website_pages',$data);
    }
    public function checkout1()
    {
        $data['flag'] = 14;
        return view('Website/Webviews/manage_website_pages',$data);
    }

    public function checkout2()
    {
        $data['flag'] = 15;
        return view('Website/Webviews/manage_website_pages',$data);

    }
    public function checkout3()
    {
        $data['flag'] = 16;
        return view('Website/Webviews/manage_website_pages',$data);

    }
}
