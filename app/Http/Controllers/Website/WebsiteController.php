<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Banner;
use App\Blogs;
use App\Categories;
use App\Product_Attribute;
use App\Product_Images;
use App\Product;
use App\Review;
use App\Plans;
use App\User;
use App\TempCart;
use App\Cart;
use DB;
use Session;
use Auth;


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
    // public function cart_page()
    // {
    //     $data['flag'] = 7;

    //     return view('Website/Webviews/manage_website_pages',$data);
        
    // }

    public function cart_page(){   
        // return 'hello';
        $data['flag'] = 7; 

        $session = Session::getId();
        $r = DB::table('temp_carts')->where('session_id',$session)->select('product_id','attribute_id')->get();
        // dd($r);
        $cart = DB::table('carts')->where('user_id',Auth::id())->select('product_id','attribute_id')->get();
        $count = DB::table('temp_carts')->where('session_id',$session)->count();


        foreach ($r as $key => $r1) {
                $data1[]=DB::table('products')
                ->join('temp_carts', 'products.products_id', '=', 'temp_carts.product_id')
                ->join('product_attributes', 'products.products_id', '=', 'product_attributes.products_id')
                ->select('products.products_id','products.product_name','products.product_code','product_attributes.price','temp_carts.quantity','temp_carts.temp_carts_id','temp_carts.attribute_id')
                ->where('product_attributes.id',$r1->attribute_id)
                ->first();
            // dd($data1);
        }

        foreach ($cart as $key => $r2) {
            $data1[]=DB::table('products')
            ->join('carts', 'products.products_id', '=', 'carts.product_id')
            ->join('product_attributes', 'products.products_id', '=', 'product_attributes.products_id')
            ->select('products.products_id','products.product_name','products.product_code','product_attributes.price','carts.quantity','carts.id','carts.attribute_id')
            ->where('product_attributes.id',$r2->attribute_id)
            ->first();
        // dd($data1);
    }
    
    if (DB::table('temp_carts')->where('session_id',$session)->count()>0) {
        $data['result'] = $data1;
        
       
    }elseif (DB::table('carts')->where('user_id',Auth::id())->count()>0) {
        $data['result'] = $data1;
       
        // dd( $data['result']);
    }else{
        $data['result']='Please Choose To Continue Shopping';
    }
    // dd($data);
        return view('Website/Webviews/manage_website_pages',$data);
    }

    public function cartUpdate(Request $req){
        // return $req;
    	if(Auth::check()){
            $user_id = Auth::user()->id;
            $cart_info =  Cart::where('attribute_id',$req->attribute_id)->where('user_id', $user_id)->first();  
            // return $user_id;
            if($req->type == 1 ){                
                //  dd($cart_info) ;
                 Cart::where('attribute_id',$req->attribute_id)->where('user_id', $user_id)
                            ->update([
                            'quantity' => $cart_info->quantity + 1,
                        ]); 
            }else{
                      //  dd($cart_info) 
                 Cart::where('attribute_id',$req->attribute_id)->where('user_id', $user_id)
                        ->update([
                        'quantity' => $cart_info->quantity - 1,
                    ]); 
            }
                   
        }else{
            $session = Session::getId();
            $cart_info =  TempCart::where('attribute_id',$req->attribute_id)->where('session_id', $session)->first();
            
            if($req->type == 1 ){                
                //  dd($cart_info) 
                TempCart::where('attribute_id',$req->attribute_id)->where('session_id', $session)
                            ->update([
                            'quantity' => $cart_info->quantity + 1,
                        ]); 
            }else{
                      //  dd($cart_info) 
                TempCart::where('attribute_id',$req->attribute_id)->where('session_id', $session)
                        ->update([
                        'quantity' => $cart_info->quantity - 1,
                    ]); 
            }
        }
        toastr()->success('Cart Updated !');
    	return 1;
    }

    public function removeProduct(Request $req){

    	if(Auth::check()){
            $user_id = Auth::user()->id;
             Cart::where('attribute_id',$req->attribute_id)->where('user_id', $user_id)->delete();             
        }else{
            $session = Session::getId();
            TempCart::where('attribute_id',$req->attribute_id)->where('session_id', $session)->delete();           
        }
        toastr()->error('Product deleted from cart');
    	return 1;
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

    public function register_submit(Request $req){
        // dd($req);
        $name = $req->name . ' ' . $req->last_name;
        $data = new User;
        $data->name=$name;
        $data->email=$req->email;
        $data->phone=$req->phone;
        $data->password= Hash::make($req->password);
        $is_saved = $data->save();

        toastr()->success('Register successfully');
        return redirect('Web-login');
}

    public function login()
    {
        $data['flag'] = 11;
        // dd($data);
        return view('Website/Webviews/manage_website_pages',$data);
    }

    public function login_submit(Request $req){
        // dd($req);

        $this->validate($req, [
            'email' => 'required|email',
            'password' => 'required'        
        ]);

        $session = Session::getId();
        $cart = TempCart::where('session_id',Session::getId())->get();
       $data = [];

        $data['email'] = $req->get('email');
        $data['password'] = $req->get('password');
        // dd($data['password']);
        if(Auth::attempt($data)){
            // dd($req);
            foreach ($cart as $r){
                $result1=DB::table('carts')->where('product_id',$r->product_id)->where('user_id',Auth::user()->id)->first();
                     if($result1 == null){
                         $data = new Cart;
                         $data->user_id= Auth::user()->id;
                         $data->product_id= $r->product_id;
                         $data->attribute_id= $r->attribute_id;
                         $data->quantity=  $r->quantity;
                         $data->save();
                     }
                     TempCart::where('session_id',$r->session_id)->delete();
             }

            toastr()->success('login successfully');
                return redirect('/');
        }else{
            toastr()->error('Email Id Or Password not match');
            return back();
        }

    }
    
    
    public function ProductDetail($product_id)
    {
        $data['flag'] = 12;
        $data['Products'] = DB::table('products')
		->join('category', 'category.id', '=', 'products.category_id')
        ->join('product_attributes','product_attributes.products_id','=','products.products_id')         
        ->join('product_images', 'product_images.products_id', '=', 'products.products_id')           
        ->select('products.*','product_attributes.price','product_attributes.id','product_attributes.special_price','product_images.product_image')
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
    public function checkout(){   
        // return 'hello';
        $data['flag'] = 14; 
                $cart = DB::table('carts')->where('user_id',Auth::id())->select('product_id','attribute_id')->get();
                foreach ($cart as $key => $r2) {
                    $data1[]=DB::table('products')
                    ->join('carts', 'products.products_id', '=', 'carts.product_id')
                    ->join('product_attributes', 'products.products_id', '=', 'product_attributes.products_id')
                    ->select('products.products_id','products.product_name','products.product_code','product_attributes.price','carts.quantity','carts.id','carts.attribute_id')
                    ->where('product_attributes.id',$r2->attribute_id)
                    ->first();
            }
            if(DB::table('carts')->where('user_id',Auth::id())->count()>0) {
                $data['result'] = $data1;
            }else{
                $data['result']='Please Choose To Continue Shopping';
            }
            // dd($data);
                return view('Website/Webviews/manage_website_pages',$data);
    }
}
