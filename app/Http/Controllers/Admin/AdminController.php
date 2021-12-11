<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Categories;
use App\SubCategories;
use App\Plans;
use App\Blogs;
use App\Banner;

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

    
}
