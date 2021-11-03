<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Banner;
use App\Blogs;
use App\Categories;
use App\Product_Attribute;
use App\Product_Images;
use App\Product;
use App\Review;
use App\Plans;
use DB;


class WebsiteController extends Controller
{
    public function index()
    {
        $data['flag'] = 1;
        $data['banner'] = Banner::where('status',1)->first();
        $data['categories_contain'] = Categories::where('status',1)->get();
        $data['plans'] = Plans::where('status',1)->get();

        return view('Website/Webviews/manage_website_pages',$data);
    }

      public function productList($Cat_id)
    {
        $data['flag'] = 2;
         $data['categories_contain'] = Categories::where('status',1)->get();
        
        $data['Products'] = DB::table('products')
		->join('category', 'category.id', '=', 'products.category_id')
        ->join('product_attributes','product_attributes.products_id','=','products.products_id')         
        ->join('product_images', 'product_images.products_id', '=', 'products.products_id')           
        ->select('products.*','product_attributes.price','product_attributes.special_price','product_images.product_image')
        ->where("products.status",1)
        ->where("product_images.type",2)
        ->where("products.category_id",$Cat_id)
        ->get();
        return view('Website/Webviews/manage_website_pages',$data);
    } 
    // public function shop_page()
    // {
    //     $data['flag'] = 2;
    //     return view('Website/Webviews/manage_website_pages',$data);
    // }
    
    public function categories()
    {
        $data['flag'] = 3;
        $data['categories_contain'] = Categories::where('status',1)->get();
        return view('Website/Webviews/manage_website_pages',$data);
    }
    public function blog_Page()
    {
        $data['flag'] = 4;
        $data['blog_contain'] = Blogs::where('status',1)->get();
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
    
    
    public function ProductDetail($product_id)
    {
        $data['flag'] = 12;
        $data['Products'] = DB::table('products')
		->join('category', 'category.id', '=', 'products.category_id')
        ->join('product_attributes','product_attributes.products_id','=','products.products_id')         
        ->join('product_images', 'product_images.products_id', '=', 'products.products_id')           
        ->select('products.*','product_attributes.price','product_attributes.special_price','product_images.product_image')
        ->where("products.status",1)
        ->where("products.products_id",$product_id)
        ->first();
        $data['product_images'] = Product_Images::where('status',1)->where('products_id',$product_id)->orderby('type','DESC')->get();
        // $data['Review'] = Review::where('status',1)->where('product_id',$product_id)->get();
        $data['Review'] = DB::table('reviews')
        ->join('users', 'users.id','=','reviews.user_id')
        ->select('reviews.*','users.name')
        ->where('reviews.status',1)
        ->where('reviews.product_id',$product_id)
        ->get();
        return view('Website/Webviews/manage_website_pages',$data);
    }

    // public function product()
    // {
    //     $data['flag'] = 12;
    //     return view('Website/Webviews/manage_website_pages',$data);
    // }
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
