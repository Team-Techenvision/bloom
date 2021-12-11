<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use redirect;
use Session;
use DB;
use Mail;

class EcomController extends Controller
{
    public function add_to_cart(Request $req){
        
        $session = Session::getId();
        // dd($session);

        if(Auth::check()){

            $result1=DB::table('carts')->where('product_id',$req->products_id)->where('user_id',Auth::user()->id)->count();

            if($result1 == 0){
                DB::table('carts')->insert([
                    'product_id'=>$req->products_id,
                    'attribute_id'=>$req->attribute_id,
                    'user_id'=> Auth::user()->id,
                    'quantity'=>$req->quantity
                ]);

            }

        }else{
            $result=DB::table('temp_carts')->where('product_id',$req->products_id)->where('session_id',$session)->count();
            if($result == 0){
                DB::table('temp_carts')->insert([
                    'product_id'=>$req->products_id,
                    'attribute_id'=>$req->attribute_id,
                    'session_id'=> $session,
                    'quantity'=>$req->quantity
                ]);
            }
        }

         toastr()->success('Item Added into Cart');
        //return back();
        return Auth::check() ? back() : back();
    }


    public function add_to_cart_get(Request $request, $products_id, $attribute_id, $quantity){
        // dd($products_id);
        if(Auth::check()){

            $result1=DB::table('carts')->where('product_id',$products_id)->where('user_id',Auth::user()->id)->count();

            if($result1 == 0){
                DB::table('carts')->insert([
                    'product_id'=>$products_id,
                    'attribute_id'=>$attribute_id,
                    'user_id'=> Auth::user()->id,
                    'quantity'=>$quantity
                ]);
                toastr()->success('Item added into cart');
               
            }else{
                toastr()->error('Item already present into cart');
               
            }
        
            return back();
        }
    }

    public function RemoveWishlist($products_id){
        DB::table('wishlists')->where('product_id', $products_id)->where('user_id',Auth::user()->id)->delete();
        toastr()->error('Product successfully deleted from Wishlist');
        return back();
    }



}
