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
use App\UserAddress;
use App\State;
use App\OrderItem;
use App\Order;
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
        $data['blog'] = Blogs::where('status',1)->orderby('created_at','desc')->paginate(2);

        return view('Website/Webviews/manage_website_pages',$data);
    }

    public function My_Address()
    {
        $data['flag'] = 15;
        $data['useraddress']= UserAddress::where('user_id',Auth::user()->id)->get();
        $data['state_list']= State::get();
        return view('Website/Webviews/manage_website_pages',$data);
    }

    public function My_Profile()
    {
        $data['flag'] = 18;
        $data['user']= User::where('id',Auth::user()->id)->first();
        return view('Website/Webviews/manage_website_pages',$data);
    }

    public function userProfileSubmit(Request $req){
        // dd($req);
        User::where('id',Auth::user()->id)->update([
            'name' => $req->name,
            'phone' => $req->phone,
            'email' => $req->email,
        ]);    

        if($req->hasFile('profile_pic')) {
            $file = $req->file('profile_pic');
            $filename = 'profile_pic'.time().'.'.$req->profile_pic->extension();
            $destinationPath = public_path('images/profile/');
            $file->move($destinationPath, $filename);
            $image = 'images/profile/'.$filename;
            User::where('id',Auth::user()->id)->update([  
                'profile_pic' => $image,
            ]);
        }
        toastr()->success('Profile Updated');
        return redirect('My-Profile');
    }

    public function userAddressSubmit(Request $req){

        // dd($req);

        if($req->address_id){
            // dd($req);
            $data = Auth::id();
            UserAddress::where('id',$req->address_id)->update([
                'user_id' => Auth::id(),
                'name' => $req->name,
                'phone' => $req->phone,
                'email' => $req->email,
                'address' => $req->address,
                'city' => $req->city,
                'state' => $req->state,
                'pin_code' => $req->pin_code,
                'country' => $req->country,
            ]);    
            toastr()->success('Address Updated');
            return redirect('My-Address');
        }else{
            // $existing_addr = UserAddress::where('user_id',Auth::id())->count();
            $data= new UserAddress;
            $data->user_id = Auth::id();
            $data->name = $req->name;
            $data->phone  = $req->phone;
            $data->email  = $req->email;
            $data->selected = empty($existing_addr)?"1":"0";
            $data->address = $req->address;
            $data->city = $req->city;
            $data->state  = $req->state;
            $data->pin_code  = $req->pin_code;
            $data->country  = $req->country;
            $data->save();

            toastr()->success('Address Save');
            return back();
        }

    }

    public function userAddressEdit($id){  
        $data['flag'] = 16;
        $data['useraddress']= UserAddress::where('id',$id)->first();
        $data['state_list']= State::get();
        return view('Website/Webviews/manage_website_pages',$data);
    }

    public function userAddressDelete($id){
        UserAddress::where('id',$id)->delete();
        toastr()->error('Your Address Delete Successfully');
        return back();
    }

      public function productList($Cat_id)
    {
        $data['flag'] = 2;
         $data['categories_contain'] = Categories::where('status',1)->get();
        $data['category_id']= $Cat_id;
        $data['Products'] = DB::table('products')
		->join('category', 'category.id', '=', 'products.category_id')
        ->join('product_attributes','product_attributes.products_id','=','products.products_id')         
        ->join('product_images', 'product_images.products_id', '=', 'products.products_id')           
        ->select('products.*','product_attributes.price','product_attributes.special_price','product_images.product_image')
        ->where("products.status",1)
        ->where("product_images.type",2)
        ->where("products.category_id",$Cat_id)
        ->paginate(20);

        $data['Simillar_products'] = DB::table('products')
		->join('category', 'category.id', '=', 'products.category_id')
        ->join('product_attributes','product_attributes.products_id','=','products.products_id')         
        ->join('product_images', 'product_images.products_id', '=', 'products.products_id')           
        ->select('products.*','product_attributes.price','product_attributes.special_price','product_images.product_image')
        ->where("products.status",1)
        ->where("product_images.type",2)
        ->orderBy('products.created_at', 'desc')->take(4)
        ->get();

        return view('Website/Webviews/manage_website_pages',$data);
    } 

    public function productList_filter(Request $req)
    {
        // dd($req);
        $minpr = 1;  
        $maxpr = $req->priceInputName; 
        $data['price_sort'] = $req->price_sort;
        $data['flag'] = 2;
        $data['category_id']= $req->category_id;
         $data['categories_contain'] = Categories::where('status',1)->get();
        $data['Products'] = DB::table('products')
		->join('category', 'category.id', '=', 'products.category_id')
        ->join('product_attributes','product_attributes.products_id','=','products.products_id')         
        ->join('product_images', 'product_images.products_id', '=', 'products.products_id')           
        ->select('products.*','product_attributes.price','product_attributes.special_price','product_images.product_image')
        ->where("products.status",1)
        ->where("product_images.type",2)
        ->where("products.category_id",$req->category_id)
        ->whereBetween('price', [$minpr, $maxpr])
        ->orderBy('price',$req->price_sort)
        ->paginate(20);

        $data['Simillar_products'] = DB::table('products')
		->join('category', 'category.id', '=', 'products.category_id')
        ->join('product_attributes','product_attributes.products_id','=','products.products_id')         
        ->join('product_images', 'product_images.products_id', '=', 'products.products_id')           
        ->select('products.*','product_attributes.price','product_attributes.special_price','product_images.product_image')
        ->where("products.status",1)
        ->where("product_images.type",2)
        ->orderBy('products.created_at', 'desc')->take(4)
        ->get();
        // dd($data['Products']);
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
        $data['blog_contain'] = Blogs::where('status',1)->paginate(6);
        return view('Website/Webviews/manage_website_pages',$data);
        
    }

    public function blogDetails($blog_id){
        $data['flag'] = 21;
        $data['blog'] = Blogs::where('id',$blog_id)->first();	
        return view('Website/Webviews/manage_website_pages', $data); 
    }

    public function contacts()
    {
        $data['flag'] = 5;
        return view('Website/Webviews/manage_website_pages',$data);
    }

    public function wishlist()
    {
        $data['flag'] = 6;
        $wishlists=DB::table('wishlists')->where('user_id',Auth::user()->id)->get();
        if(!empty($wishlists)){
            $data['result']=$wishlists;
        }else{
            $data['result']='Please Choose To Continue Shopping';
        }
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
        if(Auth::check()){
        $cart = DB::table('carts')->where('user_id',Auth::user()->id)->select('product_id','attribute_id')->get();
        }
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

        if(Auth::check()){
        foreach ($cart as $key => $r2) {
            $data1[]=DB::table('products')
            ->join('carts', 'products.products_id', '=', 'carts.product_id')
            ->join('product_attributes', 'products.products_id', '=', 'product_attributes.products_id')
            ->select('products.products_id','products.product_name','products.product_code','product_attributes.price','carts.quantity','carts.id','carts.user_id','carts.attribute_id')
            ->where('product_attributes.id',$r2->attribute_id)
            // ->where('carts.user_id', Auth::user()->id)
            ->first();
        // dd($data1);
    }
}
    
    if (DB::table('temp_carts')->where('session_id',$session)->count()>0) {
        $data['result'] = $data1;
        
       
    }elseif (DB::table('carts')->where('user_id', Auth::user()->id)->count()>0) {
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
        // dd($data['Products']->category_id);
        $data['product_images'] = Product_Images::where('status',1)->where('products_id',$product_id)->orderby('type','DESC')->get();
        // $data['Review'] = Review::where('status',1)->where('product_id',$product_id)->get();
        $data['Review'] = DB::table('reviews')
        ->join('users', 'users.id','=','reviews.user_id')
        ->select('reviews.*','users.name')
        ->where('reviews.status',1)
        ->where('reviews.product_id',$product_id)
        ->get();

        $data['Simillar_products'] = DB::table('products')
		->join('category', 'category.id', '=', 'products.category_id')
        ->join('product_attributes','product_attributes.products_id','=','products.products_id')         
        ->join('product_images', 'product_images.products_id', '=', 'products.products_id')           
        ->select('products.*','product_attributes.price','product_attributes.special_price','product_images.product_image')
        ->where("products.status",1)
        ->where("product_images.type",2)
        ->where("products.category_id",$data['Products']->category_id)
        ->orderBy(DB::raw('RAND()'))->take(4)
        ->get();

        // dd($data['Simillar_products']);

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
                $cart = DB::table('carts')->where('user_id',Auth::user()->id)->select('product_id','attribute_id')->get();
                foreach ($cart as $key => $r2) {
                    $data1[]=DB::table('products')
                    ->join('carts', 'products.products_id', '=', 'carts.product_id')
                    ->join('product_attributes', 'products.products_id', '=', 'product_attributes.products_id')
                    ->select('products.products_id','products.product_name','products.product_code','product_attributes.price','carts.quantity','carts.id','carts.attribute_id')
                    ->where('product_attributes.id',$r2->attribute_id)
                    ->first();
            }
            if(DB::table('carts')->where('user_id',Auth::user()->id)->count()>0) {
                $data['result'] = $data1;
            }else{
                $data['result']='Please Choose To Continue Shopping';
            }
            // dd($data);
            $data['useraddress']= UserAddress::where('user_id',Auth::user()->id)->get();
            // dd($data['useraddress']);
            $address_count =  $data['useraddress']->count();
            // dd($address_count);
            if($address_count > 0){
                return view('Website/Webviews/manage_website_pages',$data);
            }else{
                toastr()->error('For Proceed To Checkout Fill Address');
                return redirect('My-Address');
            }

    }

    public function checkoutSubmit(Request $req)
    {
        // dd($req);
        $this->validate($req,[
            'address_id'=>'required',
            'total_amount'=>'required',
            'payment_mode'=>'required',
         ]);
        //  dd($req);
         $cart = DB::table('carts')->where('user_id',Auth::id())->count();
         $cartTotal = 0;
         if(!empty(Auth::id())) {
             $cartTotal = DB::Select(DB::raw('SELECT sum(c.quantity*a.price) as cartTotal FROM `carts` as c inner join products as p on c.product_id = p.products_id inner join product_attributes as a on p.products_id = a.products_id WHERE c.user_id='.Auth::id()));
         }
         $total1 = (!empty($cartTotal[0]->cartTotal)?$cartTotal[0]->cartTotal:0);
        //  dd($total1);

        if ($req->address_id) {

                $total_amount1=0;
                $total_amount=0;
                $tamount = 0;
                $total_amount_with_shipping = 0;

                $data=Cart::where('user_id',Auth::user()->id)->get();
                $address = DB::table('user_addresses')->where('id',$req->address_id)->first();
               
                $order_id = "Bloom".Auth::user()->id.time();
                // dd($order_id);
                $reg = new Order;
                $reg->user_id = Auth::user()->id;
                $reg->order_id = $order_id;
                $reg->address_id = $req->address_id;
                $reg->order_status = 1;              
                $reg->payment_mode = $req->payment_mode;
                $reg->save();
                
                $count=0;
                $prod_name = [];
                $sub = [];
                $extra_discount_1 = 0;
                $totaltype1Amount = 0;
                $totaltype1Amt = 0;
                $total_discount = 0;
               
                foreach ($data as $r) {
                        $sub_order_id = "Bloom".Auth::user()->id.$count.time();
                        $reg1 = new OrderItem;
                        $reg1->order_id = $reg->order_id;
                        $reg1->sub_order_id = $sub_order_id;
                    	
                        $reg1->prod_name = Product::where('products_id',$r->product_id)->pluck('product_name')->first();
                        $reg1->prod_id = $r->product_id;
                        $reg1->attribute_id = $r->attribute_id;
                        $reg1->quantity =$r->quantity;
                        $price=Product::where('product_attributes.id',$r->attribute_id)->leftjoin('product_attributes', 'products.products_id', '=', 'product_attributes.products_id')->pluck('price')->first();
                        // echo $r->quantity;
                            $reg1->sub_total=$price;
                            $total_amount+=$price*$r->quantity;
                            $totaltype1Amount+=$price  * $r->quantity;
                            $totaltype1Amount = $totaltype1Amount - $extra_discount_1;
                        
                        $reg1->order_status = 1;
                        $prod_name[] = $reg1->prod_name;
                        $sub[] = $reg1->sub_total;                    
                	 $vendor[] = $reg1->assign_vendor_id;
                    $reg1->save();
                     $count++;
                }

                $tamount+= $total_amount;
                $shipping_percent = DB::table('shipping_charges')->where('min','<=',  $totaltype1Amount)->where('max','>=',$totaltype1Amount)->pluck('ship_charges')->first();
                
                $t_amount_with_shipping = $tamount + $shipping_percent;
                // dd($t_amount_with_shipping);
                $total_amount_with_shipping = round($t_amount_with_shipping, 2);

                DB::table('orders')->where('order_id', $order_id)->update([
                    'shipping_charge' => round($shipping_percent, 2),
                    'amount' =>  round($total_amount_with_shipping,2),
                ]);
                Cart::where('user_id',Auth::user()->id)->delete();
                Session::forget('couponData');

                if($req->payment_mode=='1'){

                    return redirect('confirm-order/'.$reg->order_id); 
                
                    // return redirect('order-success/'.$reg->order_id);

                }
        }

    }

    public function orderSuccessPage($order_id){
        $data['flag']=17;
        $data['booking'] = Order::where('order_id',$order_id)->first();    	
        return view('Website/Webviews/manage_website_pages',$data);
    }

    public function order_list(){
        $data['flag']=19;
        $data['order'] = Order::where('user_id',Auth::user()->id)->get();   	
        // dd($data);
        return view('Website/Webviews/manage_website_pages',$data);
    }

    public function userOrderDetail($id){
        $data['flag']=20;
        $data['order'] = OrderItem::where('order_id',$id)->orderBy('id','desc')->get();
        return view('Website/Webviews/manage_website_pages',$data);
    }

    public function addtoWishlist(Request $req){
        // dd($req);
        $result1=DB::table('wishlists')->where('product_id',$req->products_id)->where('user_id',Auth::user()->id)->count();
        if($result1 == 0){
            DB::table('wishlists')->insert([
                'product_id'=>$req->products_id,
                'attribute_id'=>$req->attribute_id,
                'user_id'=> Auth::user()->id,
                'quantity'=>1
            ]);
            toastr()->success('Item Added into Wishlist');
        }else{
            toastr()->warning('Item Already into Wishlist');
        }
    return back();
}
}
