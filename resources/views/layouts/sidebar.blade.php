<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="{{asset('images/users/avatar-4.jpg')}}" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">

                <a href="#" class="text-dark font-weight-medium font-size-16">{{  Auth::user()->name }}</a>
                <p class="text-body mt-1 mb-0 font-size-13">Admin </p>

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-map-marker-outline"></i>
                        <span>Users</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{url('admin')}}">Admin list</a></li>   
                        <li><a href="{{url('user-list')}}">User list</a></li>                   
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-map-marker-outline"></i>
                        <span>Master Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">  
                        <li><a href="{{url('view-banner')}}">View Banner</a></li>                       
                        <li><a href="{{url('view-category')}}">View Category</a></li>
                        <li><a href="{{url('view-sub-category')}}">View Sub-Category</a></li>
                        <li><a href="{{url('view-blogs')}}">View Blogs</a></li>
                        <li><a href="{{url('view-plans')}}">View Plans</a></li>
                    </ul>
                </li>
            
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-map-marker-outline"></i>
                        <span>Manage Product </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">  
                        <li><a href="{{url('view-product')}}">View Product</a></li>                       
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-map-marker-outline"></i>
                        <span>Manage Order </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">  
                        <li><a href="{{url('view-admin-order')}}">View Order</a></li>                       
                    </ul>
                </li>
                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->