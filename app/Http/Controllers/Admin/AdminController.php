<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Categories;
use App\Plans;
use App\Blogs;
use App\Banner;

use DB;
use Auth;

class AdminController extends Controller
{
    public function admin_list(Request $request)
    {
        $data['users'] =  User::where('user_type','1')->get();
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

    
}
