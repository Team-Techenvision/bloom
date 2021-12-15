<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\About_us;
use App\Testimonial;
use App\Categories;
use App\SubCategories;
use App\Plans;
use App\Blogs;
use App\Banner;
use App\Social_media;
use App\Basic_info;
use App\CheckThisOut;
use App\Who_We_Are;
use DB;
use Auth;

class AdminController extends Controller
{
    public function admin_list(Request $request)
    {
        $data['admin'] =  User::where('user_type','1')->get();
        $data['flag'] = 1; 
        $data['page_title'] = 'View Admin'; 
        return view('Admin/Webviews/manage_admin_user',$data);
    } 

    public function user_list(Request $request)
    {
        $data['users'] =  User::where('user_type','2')->get();
        // dd($data);
        $data['flag'] = 2; 
        $data['page_title'] = 'View User';
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function view_banner()
    {
        $data['flag'] = 3;
        $data['page_title'] = 'All Banner';       
       $data['banner'] =  Banner::get();
        // dd($data);
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function add_banner()
    {
        $data['flag'] = 4; 
        $data['page_title'] = 'Add Banner';
        // $data['tabs'] = Tabs::where('status',"1")->get(); 
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function submit_banner(Request $req){     
        // dd($req);       
        if($req->banner_id) { 
            // dd($req);
            $req->validate([
                'banner_name'=> 'required',
                //'blog_image' => 'image|mimes:jpeg,jpg,png,gif,svg' 
            ]);    
            if($req->hasFile('new_banner_image')) {
                $file = $req->file('new_banner_image');
                $filename = 'banner_image'.time().'.'.$req->new_banner_image->extension();
                $destinationPath = public_path('/images/banner');
                $file->move($destinationPath, $filename);
                $image = 'images/banner/'.$filename;
                Banner::where('id',$req->banner_id)->update([
                    'banner_name' => $req->banner_name,  
                    'banner_image' => $image,
                    'banner_title' => $req->banner_title,
                    'description' => $req->description,
                    'status' => $req->status,
                ]);
            }else{
                Banner::where('id',$req->banner_id)->update([
                    'banner_name' => $req->banner_name,  
                    'banner_title' => $req->banner_title,
                    'description' => $req->description,
                    'status' => $req->status,
                ]);
            }
            toastr()->success('Banner Successfully Updated!');
            return redirect('view-banner');
        }else{  
            // dd($req);
            $req->validate([
                'banner_name'=> 'required',   
                'banner_image'=> 'required'
            ]); 

            if($req->hasFile('banner_image')) {
                $file = $req->file('banner_image');
                $filename = 'banner_image'.time().'.'.$req->banner_image->extension();
                $destinationPath = public_path('/images/banner');
                $file->move($destinationPath, $filename);
                $image = 'images/banner/'.$filename;
                
                $data = new Banner();
                $data->banner_name = $req->banner_name;  
                $data->banner_title = $req->banner_title;
                $data->description = $req->description;  
                $data->banner_image  = $image;
                $data->status = $req->status;
                $data->save(); 
        }
         toastr()->success('Banner Successfully Added!');
        return redirect('view-banner');
        }
    } 

    public function edit_banner($id){
        $data['flag'] = 5; 
        $data['page_title'] = 'Edit Banner'; 
        $data['banner'] = Banner::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function delete_banner($id){ 
        $result = Banner::where('id',$id)->first();
        
        $path = public_path()."/".$result->banner_image;
        // dd($path);
        unlink($path);
        $data['result']=Banner::where('id',$id)->delete();
        
        toastr()->error('Banner Deleted !');
        return redirect('view-banner');
    }

    public function view_category()
    {
        $data['flag'] = 6; 
        $data['page_title'] = 'All Categories';       
       $data['Categories'] =  Categories::get();
        // dd($data);
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function add_category()
    {
        $data['flag'] = 7; 
        $data['page_title'] = 'Add Categories';
        $data['Categories'] = Categories::where('status',"1")->get(); 
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function submit_category(Request $req)
    {
     
        // dd($req);

        $this->validate($req,[
            'category_name'=>'required',       
            'status'=>'nullable|numeric'             
         ]);


         if($req->id) { 

            Categories::where('id',$req->id)->update([
                'category_name' => $req->category_name,
                'status' => $req->status,
            ]);

            if($req->hasFile('category_image_new')) {
                $file = $req->file('category_image_new');
                $filename = 'category_image'.time().'.'.$req->category_image_new->extension();
                $destinationPath = public_path('images/category/');
                $file->move($destinationPath, $filename);
                $image = 'images/category/'.$filename;
                Categories::where('id',$req->id)->update([  
                    'category_image' => $image,
                ]);
            }
            
            toastr()->success('Category Updated Successfully!');
            return redirect('view-category');

         }else{
 
                $data = new Categories;
                $data->category_name=$req->category_name;            
                $data->status=$req->status;             
                $result = $data->save();
                $insertedId = $data->id;

                if($req->hasFile('category_image')) {
                    $file = $req->file('category_image');
                    $filename = 'category_image'.time().'.'.$req->category_image->extension();
                    $destinationPath = public_path('images/category/');
                    $file->move($destinationPath, $filename);
                    $image = 'images/category/'.$filename;
                    Categories::where('id',$insertedId)->update([  
                        'category_image' => $image,
                    ]);
                }

            if($result)
            {
                toastr()->success('Category Successfully Added!');
            }
            else
            {
                toastr()->error('Category Not Added!!');
            }         
    
        // toastr()->success('Subject Successfully Added!');
        return redirect('view-category');

        }
    }


    public function delete_category($id){ 

        $result = Categories::where('id',$id)->first();
        
        $path = public_path()."/".$result->category_image;
        // dd($path);
        unlink($path);
        $data['result']=Categories::where('id',$id)->delete();
        toastr()->error('Category Deleted !');
        return redirect('view-category');
    }

    public function edit_category($id){
        $data['flag'] = 8; 
        $data['page_title'] = 'Edit Category'; 
        $data['categories'] = Categories::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/Webviews/manage_admin_user',$data);
    }


    public function update_category_status($id, $status){ 
        Categories::where('id',$id)->update([
            'status' => $status,
        ]);
        toastr()->error('Category Status Updated!');
        return redirect('view-category');
    }


    public function view_sub_category()
    {
        $data['flag'] = 9; 
        $data['page_title'] = 'All Sub Categories';       
       $data['Sub_Categories'] =  SubCategories::get();
        // dd($data);
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function add_sub_category()
    {
        $data['flag'] = 10; 
        $data['page_title'] = 'Add Sub Categories';
        $data['Categories'] = Categories::where('status',"1")->get(); 
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function submit_sub_category(Request $req)
    {
     
        // dd($req);

        $this->validate($req,[
            'sub_category_name'=>'required',       
            'status'=>'nullable|numeric'             
         ]);


         if($req->id) { 

            SubCategories::where('id',$req->id)->update([
                'sub_category_name' => $req->sub_category_name,
                'category_id' => $req->category_id,
                'status' => $req->status,
            ]);

            if($req->hasFile('sub_category_image_new')) {
                $file = $req->file('sub_category_image_new');
                $filename = 'category_image'.time().'.'.$req->sub_category_image_new->extension();
                $destinationPath = public_path('images/subcategory/');
                $file->move($destinationPath, $filename);
                $image = 'images/subcategory/'.$filename;
                SubCategories::where('id',$req->id)->update([  
                    'sub_category_image' => $image,
                ]);
            }
            
            toastr()->success('Category Updated Successfully!');
            return redirect('view-sub-category');

         }else{
                $data = new SubCategories;
                $data->category_id=$req->category_id;
                $data->sub_category_name=$req->sub_category_name;            
                $data->status=$req->status;             
                $result = $data->save();
                $insertedId = $data->id;

                if($req->hasFile('sub_category_image')) {
                    $file = $req->file('sub_category_image');
                    $filename = 'sub_category_image'.time().'.'.$req->sub_category_image->extension();
                    $destinationPath = public_path('images/subcategory/');
                    $file->move($destinationPath, $filename);
                    $image = 'images/subcategory/'.$filename;
                    SubCategories::where('id',$insertedId)->update([  
                        'sub_category_image' => $image,
                    ]);
                }

            if($result)
            {
                toastr()->success('Sub Category Successfully Added!');
            }
            else
            {
                toastr()->error('Sub Category Not Added!!');
            }         
    
        // toastr()->success('Subject Successfully Added!');
        return redirect('view-sub-category');

        }
    }


    public function delete_sub_category($id){ 

        $result = SubCategories::where('id',$id)->first();
        
        $path = public_path()."/".$result->sub_category_image;
        // dd($path);
        unlink($path);
        $data['result']=SubCategories::where('id',$id)->delete();
        toastr()->error('Sub-Category Deleted !');
        return redirect('view-sub-category');
    }

    public function edit_sub_category($id){
        $data['flag'] = 11; 
        $data['page_title'] = 'Edit Category'; 
        $data['Categories'] = Categories::get(); 
        $data['SubCategories'] = SubCategories::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/Webviews/manage_admin_user',$data);
    }


    public function update_sub_category_status($id, $status){ 
        SubCategories::where('id',$id)->update([
            'status' => $status,
        ]);
        toastr()->error('Sub-Category Status Updated!');
        return redirect('view-sub-category');
    }


    public function view_blogs()
    {
        $data['flag'] = 12; 
        $data['page_title'] = 'All Blog';       
       $data['blogs'] =  Blogs::get();
        // dd($data);
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function add_blogs()
    {
        $data['flag'] = 13; 
        $data['page_title'] = 'Add Blog';
        $data['Categories'] = Categories::where('status',"1")->get();
        // $data['tabs'] = Tabs::where('status',"1")->get(); 
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function submit_blogs(Request $req){            
        if($req->blog_id) { 
            // dd($req);
            $req->validate([
                'blog_title'=> 'required',
                //'blog_image' => 'image|mimes:jpeg,jpg,png,gif,svg' 
            ]);    
            if($req->hasFile('new_blog_image')) {
                $file = $req->file('new_blog_image');
                $filename = 'blog_image'.time().'.'.$req->new_blog_image->extension();
                $destinationPath = public_path('/images/blog');
                $file->move($destinationPath, $filename);
                $image = 'images/blog/'.$filename;
                Blogs::where('id',$req->blog_id)->update([
                    'blog_title' => $req->blog_title, 
                    'category_id' => $req->category_id,  
                    'blog_images' => $image,
                    'blog_date' => $req->blog_date,
                    'blog_content' => $req->blog_content,
                    'status' => $req->status,
                ]);
            }else{
                Blogs::where('id',$req->blog_id)->update([
                    'blog_title' => $req->blog_title, 
                    'category_id' => $req->category_id, 
                    'blog_date' => $req->blog_date,
                    'blog_content' => $req->blog_content,
                    'status' => $req->status,
                ]);
            }
            toastr()->success('Blog Successfully Updated!');
            return redirect('view-blogs');
        }else{  
            // dd($req);
            $req->validate([
                'blog_title'=> 'required',   
                'blog_content'=> 'required'
            ]); 

            if($req->hasFile('blog_image')) {
                $file = $req->file('blog_image');
                $filename = 'blog_image'.time().'.'.$req->blog_image->extension();
                $destinationPath = public_path('/images/blog');
                $file->move($destinationPath, $filename);
                $image = 'images/blog/'.$filename;
                
                $data = new Blogs();
                $data->blog_title = $req->blog_title; 
                $data->category_id = $req->category_id;  
                $data->blog_date = $req->blog_date;
                $data->blog_content = $req->blog_content;  
                $data->blog_images  = $image;
                $data->status = $req->status;
                $data->save(); 
            
        }else{
            $data = new Blogs();
            $data->blog_title = $req->blog_title; 
            $data->category_id = $req->category_id; 
            $data->blog_date = $req->blog_date;
            $data->blog_content = $req->blog_content;  
            $data->status = $req->status;
            $data->save(); 
        } 
         toastr()->success('Blog Successfully Added!');
        return redirect('view-blogs');
        }
    } 

    public function edit_blogs($id){
        $data['flag'] = 14; 
        $data['page_title'] = 'Edit Blog'; 
        $data['Categories'] = Categories::where('status',"1")->get();
        $data['blogs'] = Blogs::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function delete_blogs($id){ 
        $data['result']=Blogs::where('id',$id)->delete();
        toastr()->error('Blog Deleted !');
        return redirect('view-blogs');
    }

    public function view_plans()
    {
        $data['flag'] = 15; 
        $data['page_title'] = 'All Plan';       
       $data['plans'] =  Plans::get();
        // dd($data);
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function add_plans()
    {
        $data['flag'] = 16; 
        $data['page_title'] = 'Add Plan';
        // $data['tabs'] = Tabs::where('status',"1")->get(); 
        return view('Admin/Webviews/manage_admin_user',$data);
    }
    public function submit_plans(Request $req)
    {
    //    dd($req);
        $this->validate($req,[
            'plan_name'=>'required',       
            'price'=>'required|numeric'             
         ]);


         if($req->plan_id) { 
            Plans::where('id',$req->plan_id)->update([
                'plan_name' => $req->plan_name,
                'price' => $req->price,
                'description' => $req->description,
                'status' => $req->status,
            ]);
            toastr()->success('Plan Updated Successfully!');
            return redirect('view-plans');
         }else{
 
                $data = new Plans;
                $data->plan_name=$req->plan_name; 
                $data->price=$req->price;       
                $data->description=$req->description;      
                $data->status=$req->status;             
                $result = $data->save();
            if($result)
            {
                toastr()->success('Plan Successfully Added!');
            }
            else
            {
                toastr()->error('Plan Not Added!!');
            }         
    
        // toastr()->success('Subject Successfully Added!');
        return redirect('view-plans');
        }
    }

    public function delete_plans($id){ 
        $data['result']= Plans::where('id',$id)->delete();
        toastr()->error('plan Deleted !');
        return redirect('view-plans');
    }

    public function edit_plans($id){
        $data['flag'] = 17; 
        $data['page_title'] = 'Edit Plan'; 
        $data['plans'] = Plans::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function update_plan_status($id, $status){ 
        Plans::where('id',$id)->update([
            'status' => $status,
        ]);
        toastr()->error('Plan Status Updated!');
        return redirect('view-plans');
    }


    public function view_about_us()
    {
        $data['flag'] = 18; 
        $data['page_title'] = 'About us';       
        $data['About_us'] =  About_us::get();
        // dd($data);
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function add_about_us()
    {
        $data['flag'] = 19; 
        $data['page_title'] = 'About Us';
        // $data['tabs'] = Tabs::where('status',"1")->get(); 
        return view('Admin/Webviews/manage_admin_user',$data);
    }
    public function submit_about_us(Request $req){            
        if($req->about_us_id) { 
            // dd($req);
            $req->validate([
                'content'=> 'required',
                //'blog_image' => 'image|mimes:jpeg,jpg,png,gif,svg' 
            ]);    
            if($req->hasFile('new_bg_image')) {
                $file = $req->file('new_bg_image');
                $filename = 'bg_image'.time().'.'.$req->new_bg_image->extension();
                $destinationPath = public_path('/images');
                $file->move($destinationPath, $filename);
                $image = 'images/'.$filename;
                About_us::where('id',$req->about_us_id)->update([
                    'content' => $req->content,   
                    'bg_image' => $image,
                    'status' => $req->status,
                ]);
            }else{
                About_us::where('id',$req->about_us_id)->update([
                    'content' => $req->content,   
                    'status' => $req->status,
                ]);
            }
            toastr()->success('Successfully Updated!');
            return redirect('view-about-us');
        }else{  
            // dd($req);
            $req->validate([
                'content'=> 'required',   
            ]); 

            if($req->hasFile('bg_image')) {
                $file = $req->file('bg_image');
                $filename = 'bg_image'.time().'.'.$req->bg_image->extension();
                $destinationPath = public_path('/images');
                $file->move($destinationPath, $filename);
                $image = 'images/'.$filename;
                
                $data = new About_us();
                $data->content = $req->content;  
                $data->bg_image  = $image;
                $data->status = $req->status;
                $data->save(); 
            
        }else{
            $data = new About_us();
            $data->content = $req->content;  
            $data->status = $req->status;
            $data->save(); 
        } 
         toastr()->success('Successfully Added!');
        return redirect('view-about-us');
        }
    } 

    public function delete_about_us($id){ 
        $data['result']= About_us::where('id',$id)->delete();
        toastr()->error('Deleted !');
        return redirect('view-about-us');
    }

    public function edit_about_us($id){
        $data['flag'] = 20; 
        $data['page_title'] = 'Edit About Us'; 
        $data['about_us'] = About_us::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function update_about_us_status($id, $status){ 
        About_us::where('id',$id)->update([
            'status' => $status,
        ]);
        toastr()->error('About Status Updated!');
        return redirect('view-about-us');
    }

    public function view_testimonial()
    {
        $data['flag'] = 21; 
        $data['page_title'] = 'Testimonial';       
        $data['Testimonial'] =  Testimonial::get();
        // dd($data);
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function add_testimonial()
    {
        $data['flag'] = 22; 
        $data['page_title'] = 'Testimonial';
        // $data['tabs'] = Tabs::where('status',"1")->get(); 
        return view('Admin/Webviews/manage_admin_user',$data);
    }
    public function submit_testimonial(Request $req){   
        // dd($req);         
        if($req->testimonial_id) { 
            // dd($req);
            $req->validate([
                'customer_name'=> 'required',
                'description'=> 'required',
                'images' => 'image|mimes:jpeg,jpg,png,gif,svg'
            ]);    
            if($req->hasFile('new_images')) {
                $file = $req->file('new_images');
                $filename = 'testimonial'.time().'.'.$req->new_images->extension();
                $destinationPath = public_path('/images/testimonial');
                $file->move($destinationPath, $filename);
                $image = 'images/testimonial/'.$filename;
                
                Testimonial::where('id',$req->testimonial_id)->update([
                    'customer_name' => $req->customer_name,   
                    'images' => $image,
                    'description' => $req->description,   
                    'status' => $req->status,
                ]);
            }else{
                Testimonial::where('id',$req->testimonial_id)->update([
                    'customer_name' => $req->customer_name,   
                    'description' => $req->description,   
                    'status' => $req->status,
                ]);
            }
            toastr()->success('Successfully Updated!');
            return redirect('view-testimonial');
        }else{  
            // dd($req);
            $req->validate([
                'customer_name'=> 'required',
                'description'=> 'required',
                'images' => 'image|mimes:jpeg,jpg,png,gif,svg',  
            ]); 

            if($req->hasFile('images')) {
                $file = $req->file('images');
                $filename = 'testimonial'.time().'.'.$req->images->extension();
                $destinationPath = public_path('/images/testimonial');
                $file->move($destinationPath, $filename);
                $image = '/images/testimonial/'.$filename;
                
                $data = new Testimonial();
                $data->customer_name = $req->customer_name; 
                $data->description = $req->description;  
                $data->images  = $image;
                $data->status = $req->status;
                $data->save(); 
            
        }else{
            $data = new Testimonial();
            $data->customer_name = $req->customer_name; 
            $data->description = $req->description;  
            $data->status = $req->status;
            $data->save(); 
        } 
         toastr()->success('Successfully Added!');
        return redirect('view-testimonial');
        }
    } 

    public function delete_testimonial($id){ 
        $data['result']= Testimonial::where('id',$id)->delete();
        toastr()->error('Deleted !');
        return redirect('view-testimonial');
    }

    public function edit_testimonial($id){
        $data['flag'] = 23; 
        $data['page_title'] = 'Edit Testimonial'; 
        $data['Testimonial'] = Testimonial::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function update_testimonial_status($id, $status){ 
        About_us::where('id',$id)->update([
            'status' => $status,
        ]);
        toastr()->error('About Status Updated!');
        return redirect('view-about-us');
    }

    public function view_social_media()
    {
        $data['flag'] = 24; 
        $data['page_title'] = 'All Social Media';       
       $data['social_media'] =  Social_media::get();
        // dd($data);
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function add_social_media()
    {
        $data['flag'] = 25; 
        $data['page_title'] = 'Add Social Media';
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function submit_social_media(Request $req)
    {
     
        // dd($req);

        $this->validate($req,[
            'social_media_name'=>'required', 
            'link'=>'required'            
         ]);


         if($req->social_media_id) { 
            Social_media::where('id',$req->social_media_id)->update([
                'social_media_name' => $req->social_media_name,
                'link' => $req->link,
                'status' => $req->status,
            ]);
            toastr()->success('Social Media Updated Successfully!');
            return redirect('view-social-media');
         }else{
 
                $data = new Social_media;
                $data->social_media_name=$req->social_media_name; 
                $data->link=$req->link;            
                $data->status=$req->status;             
                $result = $data->save();               
            if($result)
            {
                toastr()->success('Social Media Successfully Added!');
            }
            else
            {
                toastr()->error('Social Media Not Added!!');
            }         
    
        // toastr()->success('Subject Successfully Added!');
        return redirect('view-social-media');
        }
    }


    public function delete_social_media($id){ 
        $data['result']=Social_media::where('id',$id)->delete();
        toastr()->error('Social Media Deleted !');
        return redirect('view-social-media');
    }

    public function edit_social_media($id){
        $data['flag'] = 26; 
        $data['page_title'] = 'Social Media'; 
        $data['social_media'] = Social_media::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function view_basic_info()
    {
        $data['flag'] = 27; 
        $data['page_title'] = 'Basic Information';       
       $data['basic_info'] =  Basic_info::get();
        // dd($data);
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function add_basic_info()
    {
        $data['flag'] = 28; 
        $data['page_title'] = 'Add Basic Information';
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function submit_basic_info(Request $req)
    {
     
        // dd($req);

        $this->validate($req,[
            'address'=>'required', 
            'phone1'=>'required'            
         ]);


         if($req->basic_info_id) { 
            Basic_info::where('id',$req->basic_info_id)->update([
                'address' => $req->address,
                'phone1' => $req->phone1,
                'phone2' => $req->phone2,
                'email' => $req->email,
                'timing' => $req->timing,
                'map' => $req->map,
                'google_analytics' => $req->google_analytics,
                'facebook_pixel' => $req->facebook_pixel,
                'status' => $req->status,
            ]);
            toastr()->success('Basic Information Updated!');
            return redirect('view-basic-info');
         }else{
                $data = new Basic_info;
                $data->address=$req->address; 
                $data->phone1=$req->phone1; 
                $data->phone2=$req->phone2; 
                $data->email=$req->email; 
                $data->timing=$req->timing;  
                $data->map=$req->map; 
                $data->google_analytics=$req->google_analytics;            
                $data->facebook_pixel=$req->facebook_pixel;            
                $data->status=$req->status;             
                $result = $data->save();               
            if($result)
            {
                toastr()->success('Basic Information Added!');
            }
            else
            {
                toastr()->error('Basic Information Not Added!!');
            }         
    
        // toastr()->success('Subject Successfully Added!');
        return redirect('view-basic-info');
        }
    }


    public function delete_basic_info($id){ 
        $data['result']=Basic_info::where('id',$id)->delete();
        toastr()->error('Basic Information Deleted !');
        return redirect('view-basic-info');
    }

    public function edit_basic_info($id){
        $data['flag'] = 29; 
        $data['page_title'] = 'Basic Information'; 
        $data['basic_info'] = Basic_info::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function view_check_out_section()
    {
        $data['flag'] = 30; 
        $data['page_title'] = 'Check This Out Section';       
        $data['check_this_out'] =  CheckThisOut::get();
        // dd($data);
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function add_check_out_section()
    {
        $data['flag'] = 31; 
        $data['page_title'] = 'Check This Out Section';
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function submit_check_out_section(Request $req)
    {
     
        // dd($req);

        $this->validate($req,[
            'title'=>'required',       
            'status'=>'nullable|numeric'             
         ]);


         if($req->id) { 
            CheckThisOut::where('id',$req->id)->update([
                'title' => $req->title,
                'content' => $req->content,
                'status' => $req->status,
            ]);
            if($req->hasFile('new_bg_image')) {
                $file = $req->file('new_bg_image');
                $filename = 'bg_image'.time().'.'.$req->new_bg_image->extension();
                $destinationPath = public_path('images/');
                $file->move($destinationPath, $filename);
                $image = 'images/'.$filename;
                CheckThisOut::where('id',$req->id)->update([  
                    'bg_image' => $image,
                ]);
            }
            if($req->hasFile('new_left_side_image')) {
                $file = $req->file('new_left_side_image');
                $filename = 'left_side_image'.time().'.'.$req->new_left_side_image->extension();
                $destinationPath = public_path('images/');
                $file->move($destinationPath, $filename);
                $image = 'images/'.$filename;
                CheckThisOut::where('id',$req->id)->update([  
                    'left_side_image' => $image,
                ]);
            }
            
            toastr()->success('Check This Out Section Updated!');
            return redirect('view-check-out-section');
         }else{
                $data = new CheckThisOut;
                $data->title=$req->title;
                $data->content=$req->content;            
                $data->status=$req->status;             
                $result = $data->save();
                $insertedId = $data->id;

                if($req->hasFile('bg_image')) {
                    $file = $req->file('bg_image');
                    $filename = 'bg_image'.time().'.'.$req->bg_image->extension();
                    $destinationPath = public_path('images/');
                    $file->move($destinationPath, $filename);
                    $image = 'images/'.$filename;
                    CheckThisOut::where('id',$insertedId)->update([  
                        'bg_image' => $image,
                    ]);
                }
                if($req->hasFile('left_side_image')) {
                    $file = $req->file('left_side_image');
                    $filename = 'left_side_image'.time().'.'.$req->left_side_image->extension();
                    $destinationPath = public_path('images/');
                    $file->move($destinationPath, $filename);
                    $image = 'images/'.$filename;
                    CheckThisOut::where('id',$insertedId)->update([  
                        'left_side_image' => $image,
                    ]);
                }

            if($result)
            {
                toastr()->success('Check This Out Section Added!');
            }
            else
            {
                toastr()->error('Check This Out Section Not Added!!');
            }         
    
        // toastr()->success('Subject Successfully Added!');
        return redirect('view-check-out-section');

        }
    }


    public function delete_check_out_section($id){ 

        $result = CheckThisOut::where('id',$id)->first();
        
        // $path = public_path()."/".$result->sub_category_image;
        // // dd($path);
        // unlink($path);
        $data['result']=CheckThisOut::where('id',$id)->delete();
        toastr()->error('Check This Out !');
        return redirect('view-check-out-section');
    }

    public function edit_check_out_section($id){
        $data['flag'] = 32; 
        $data['page_title'] = 'Edit Check This Out'; 
        $data['checkthisout'] = CheckThisOut::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function view_who_we_are()
    {
        $data['flag'] = 33; 
        $data['page_title'] = 'Who We Are Section';       
        $data['who_we_are'] =  Who_We_Are::get();
        // dd($data);
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function add_who_we_are()
    {
        $data['flag'] = 34; 
        $data['page_title'] = 'Check This Out Section';
        return view('Admin/Webviews/manage_admin_user',$data);
    }

    public function submit_who_we_are(Request $req)
    {
     
        // dd($req);

        $this->validate($req,[
            'title'=>'required',       
            'status'=>'nullable|numeric'             
         ]);


         if($req->id) { 
            Who_We_Are::where('id',$req->id)->update([
                'title' => $req->title,
                'content' => $req->content,
                'status' => $req->status,
                'right_side_video_link' => $req->right_side_video_link,
            ]);
            if($req->hasFile('new_bg_image')) {
                $file = $req->file('new_bg_image');
                $filename = 'bg_image'.time().'.'.$req->new_bg_image->extension();
                $destinationPath = public_path('images/');
                $file->move($destinationPath, $filename);
                $image = 'images/'.$filename;
                Who_We_Are::where('id',$req->id)->update([  
                    'bg_image' => $image,
                ]);
            }
            if($req->hasFile('new_right_side_video')) {
                $file = $req->file('new_right_side_video');
                $filename = 'right_side_video'.time().'.'.$req->new_right_side_video->extension();
                $destinationPath = public_path('video/');
                $file->move($destinationPath, $filename);
                $image = 'video/'.$filename;
                Who_We_Are::where('id',$req->id)->update([  
                    'right_side_video' => $image,
                ]);
            }
            
            toastr()->success('Who We Are Section Updated!');
            return redirect('view-who-we-are');
         }else{
                $data = new Who_We_Are;
                $data->title=$req->title;
                $data->content=$req->content;            
                $data->right_side_video_link=$req->right_side_video_link; 
                $data->status=$req->status;             
                $result = $data->save();
                $insertedId = $data->id;

                if($req->hasFile('bg_image')) {
                    $file = $req->file('bg_image');
                    $filename = 'bg_image'.time().'.'.$req->bg_image->extension();
                    $destinationPath = public_path('images/');
                    $file->move($destinationPath, $filename);
                    $image = 'images/'.$filename;
                    Who_We_Are::where('id',$insertedId)->update([  
                        'bg_image' => $image,
                    ]);
                }
                if($req->hasFile('right_side_video')) {
                    $file = $req->file('right_side_video');
                    $filename = 'right_side_video'.time().'.'.$req->right_side_video->extension();
                    $destinationPath = public_path('video/');
                    $file->move($destinationPath, $filename);
                    $image = 'video/'.$filename;
                    Who_We_Are::where('id',$insertedId)->update([  
                        'right_side_video' => $image,
                    ]);
                }

            if($result)
            {
                toastr()->success('Who We Are Added!');
            }
            else
            {
                toastr()->error('Who We Are Not Added!!');
            }         
    
        // toastr()->success('Subject Successfully Added!');
        return redirect('view-who-we-are');

        }
    }


    public function delete_who_we_are($id){ 
        $result = Who_We_Are::where('id',$id)->first();
        $data['result']=Who_We_Are::where('id',$id)->delete();
        toastr()->error('Who We Are Deleted !');
        return redirect('view-who-we-are');
    }

    public function edit_who_we_are($id){
        $data['flag'] = 35; 
        $data['page_title'] = 'Edit Who We Are'; 
        $data['who_we_are'] = Who_We_Are::where('id',$id)->first(); 
        // dd($data);
        return view('Admin/Webviews/manage_admin_user',$data);
    }
    
}
