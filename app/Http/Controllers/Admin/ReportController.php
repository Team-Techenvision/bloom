<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\OrderItem;
use App\UserSubcription;
use Auth;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SellExport;
use App\Exports\UserExport;


class ReportController extends Controller
{
    
    public function sell_report()
    {
        $data['page_title'] = 'Sell Report';
        $data['flag'] = 12;      
        $data['sell_details'] = OrderItem::Join('products', 'products.products_id', '=', 'order_items.prod_id')
                                    ->Join('orders', 'orders.order_id', '=', 'order_items.order_id')
                                    ->join('users', 'users.id', '=', 'orders.user_id')
                                    ->orderBy('order_items.id','desc')
                                    ->get();
        // dd($data);
        return view('Admin/webviews/manage_admin_pages',$data);
    }

    

    public function subscription_report()
    {
        $data['page_title'] = 'User Subscription Report';
        $data['flag'] = 13;      
        $data['user_subscription'] =  UserSubcription::Join('users', 'users.id', '=', 'user_subcription.user_id')
                                            ->Join('plans', 'plans.id', '=', 'user_subcription.plan_id')
                                            ->where('users.user_type','2')->get();
        // dd($data);
        return view('Admin/webviews/manage_admin_pages',$data);
    }

    public function export(Request $request) 
    {
        $sell_details = OrderItem::Join('products', 'products.products_id', '=', 'order_items.prod_id')
                    ->Join('orders', 'orders.order_id', '=', 'order_items.order_id')
                    ->join('users', 'users.id', '=', 'orders.user_id')
                    ->orderBy('order_items.id','desc')
                    ->get();
        // dd($orderData->count());       
        return Excel::download(new SellExport($sell_details), 'sell_report.xlsx');
        // return (new UsersExport)->download('orders.xlsx');
    }

    public function userexport(Request $request) 
    {
        $user_details = UserSubcription::Join('users', 'users.id', '=', 'user_subcription.user_id')
                                        ->Join('plans', 'plans.id', '=', 'user_subcription.plan_id')
                                        ->where('users.user_type','2')->get();
        // dd($orderData->count());       
        return Excel::download(new UserExport($user_details), 'user_report.xlsx');
        // return (new UsersExport)->download('orders.xlsx');
    }
    
}
