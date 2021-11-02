<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Product_Attribute;
use App\Product_Images;
use App\Categories;
use Auth;
use DB;
use Mail;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function view_product()
    {
        $data['product'] =  Product::get();
        $data['flag'] = 1; 
        $data['page_title'] = 'View Product List'; 
        // dd($data['product']);
        return view('Admin/Webviews/manage_admin_pages',$data);
    } 

    public function add_product()
    {
        $data['categories'] =  Categories::get();
        $user_id = Auth::user()->id; 
        $data['user']= User::where('id',$user_id)->first();
        $data['flag'] = 2; 
        $data['page_title'] = 'Add Product'; 
        return view('Admin/Webviews/manage_admin_pages',$data);
    } 

  
    public function submit_product(Request $req)
    {
     
        // dd($req);

         if($req->products_id) { 

            $this->validate($req,[
                'product_name'=>'required',      
                'category_id'=>'required|numeric',
                'product_code'=>'required',           
             ]);

            Product::where('products_id',$req->products_id)->update([
                'product_name' => $req->product_name,
                'product_code' => $req->product_code,
                'category_id' => $req->category_id,
                'sub_category_id' => $req->sub_category_id,
                'short_description' => $req->short_description,
                'long_description' => $req->long_description,
                'status' => $req->status,    
            ]);

            if($req->hasFile('product_image_new')) {
                $file = $req->file('product_image_new');
                $filename = 'product_main_image'.time().'.'.$req->product_image_new->extension();
                $destinationPath = public_path('images/product/');
                $file->move($destinationPath, $filename);
                $image = 'images/product/'.$filename;
                Product_Images::where('products_id',$req->products_id)->update([  
                    'product_image' => $image,
                ]);
            }
            
            toastr()->success('Product Updated Successfully!');
            return redirect('view-product');

         }else{

            $this->validate($req,[
                'product_name'=>'required',      
                'category_id'=>'required|numeric',
                'product_code'=>'required',  
                'product_image'=>'required',          
             ]);
 
            $slug = Str::random(10);
            // dd($slug);
                $data = new Product;
                $data->product_name=$req->product_name;   
                $data->slug=$slug;   
                $data->category_id=$req->category_id;
                $data->sub_category_id=$req->sub_category_id;            
                $data->product_code=$req->product_code;
                $data->short_description=$req->short_description;            
                $data->long_description=$req->long_description;           
                $data->status=$req->status;           
                $result = $data->save();
                $insertedId = $data->id;

                if($req->hasFile('product_image')) {
                    $file = $req->file('product_image');
                    $filename = 'product_main_image'.time().'.'.$req->product_image->extension();
                    $destinationPath = public_path('images/product/');
                    $file->move($destinationPath, $filename);
                    $image = 'images/product/'.$filename;

                    $data = new Product_Images();
                    $data->products_id = $insertedId;  
                    $data->product_image = $image;
                    $data->type = '2';  
                    $data->status = $req->status;
                    $data->save();
                }

            if($result)
            {
                toastr()->success('Product Successfully Added!');
            }
            else
            {
                toastr()->error('Product Not Added!!');
            }         
    
        // toastr()->success('Subject Successfully Added!');
        return redirect('view-product');
        }
    }


    public function edit_product($id){
        $data['page_title'] = 'Edit Product';  
        $data['flag'] = 3; 
        $data['product'] =  Product::join('product_images','product_images.products_id', '=', 'products.products_id')->where('products.products_id', $id)->first();
        $data['categories'] =  Categories::get();
      
        // dd($data);
        return view('Admin/Webviews/manage_admin_pages',$data);
    }

    public function delete_product($id){ 
        $data['result']= Product::where('products_id',$id)->delete();
        toastr()->error('Product Deleted !');
        return redirect('view-product');
    }

    public function view_product_attribute($products_id)
    {
        $data['products_id'] = $products_id;
        $data['product_attribute'] =  Product_Attribute::join('products','products.products_id','=','product_attributes.products_id')->select('product_attributes.*', 'products.products_id','products.product_name')->where('product_attributes.products_id', $products_id)->get();
        $data['flag'] = 4; 
        $data['page_title'] = 'View Product Attribute'; 
        return view('Admin/Webviews/manage_admin_pages',$data);
    } 

    public function add_product_attribute($products_id)
    {
        $data['products_id'] = $products_id;
        $data['product'] = Product::where('products_id',$products_id)->first();
        $data['flag'] = 5; 
        $data['page_title'] = 'Add Product Attributes'; 
        return view('Admin/Webviews/manage_admin_pages',$data);
    } 

    public function submit_product_attribute(Request $req)
    {
        // dd($req);
        $user_id = Auth::user()->id; 
         if($req->id) { 
            $this->validate($req,[
                'id'=>'required',          
             ]);

             Product_Attribute::where('id',$req->id)->update([
                'products_id' => $req->products_id,
                'product_size' => $req->product_size,
                'product_color' => $req->product_color,
                'price' => $req->price,
                'quantity' => $req->quantity,
                'status' => $req->status,    
            ]);
            toastr()->success('Product Attribute Updated!');
            return redirect('view-product');

         }else{

            $this->validate($req,[
                'products_id'=>'required',         
             ]);
 
                $data = new Product_Attribute;
                $data->products_id=$req->products_id;              
                $data->product_size=$req->product_size;            
                $data->product_color=$req->product_color;
                $data->price=$req->price;            
                $data->quantity=$req->quantity;         
                $data->status=$req->status;           
                $result = $data->save();
            if($result)
            {
                toastr()->success('Product Attribute Added!');
            }
            else
            {
                toastr()->error('Product Attribute Not Added!!');
            }         
    
        // toastr()->success('Subject Successfully Added!');
        return redirect('view-product');
        }
    }

    public function edit_product_attribute($id){
        $data['product_attribute'] =  Product_Attribute::join('products','products.products_id','=','product_attributes.products_id')->select('product_attributes.*', 'products.products_id','products.product_name')->where('product_attributes.id', $id)->first();
        $data['flag'] = 6; 
        $data['page_title'] = 'View Product Attribute';
        // dd($data);
        return view('Admin/Webviews/manage_admin_pages',$data);
    }

    public function delete_product_attribute($id){ 
        $data['result']= Product_Attribute::where('id',$id)->delete();
        toastr()->error('Product Attribute Deleted !');
        return redirect('view-product');
    }

    public function view_product_images($products_id)
    {
        $data['products_id'] = $products_id;
        $data['product_images'] =  Product_Images::where('products_id', $products_id)->get();
        $data['flag'] = 7; 
        $data['page_title'] = 'View Product images'; 
        // dd($data['product']);
        return view('Admin/Webviews/manage_admin_pages',$data);
    } 

    public function add_product_images($products_id)
    {
        $data['products_id'] = $products_id;
        // $data['product_images'] =  Product_Images::where('products_id', $products_id)->get();
        $data['flag'] = 8; 
        $data['page_title'] = 'Add Product images'; 
        return view('Admin/Webviews/manage_admin_pages',$data);
    } 

    public function submit_product_images(Request $req)
    {
        // dd($req);
        $user_id = Auth::user()->id; 
            $this->validate($req,[
                'products_id'=>'required',            
             ]);

             $s = 0;
        
             if ($req->hasfile('product_image')) 
             {
                 foreach($req->file('product_image') as $row)
                 {  
                    $file = $req->file('product_image')[$s];
                    $filename = 'product_sub_image'.rand(11111, 99999).'.'.$req->product_image[$s]->extension();
                    $destinationPath = public_path('images/product/');
                    $file->move($destinationPath, $filename);
                    $image = 'images/product/'.$filename;

                    $data = new Product_Images();
                    $data->products_id = $req->products_id;  
                    $data->product_image = $image;
                    $data->type = '1';  
                    $data->status = '1';
                    $result = $data->save();
                     $s++;               
                 }
             }
            if($result)
            {
                toastr()->success('Product Images Added!');
            }
            else
            {
                toastr()->error('Product Not Added!!');
            }         
    
        // toastr()->success('Subject Successfully Added!');
        return redirect('view-product');
        
    }

    public function delete_product_images($id){ 
        $data['result']= Product_Images::where('product_images_id',$id)->delete();
        toastr()->error('image Deleted !');
        // return redirect('view-product');
        return back();
    }
}
