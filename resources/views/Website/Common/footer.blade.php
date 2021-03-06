

<!-- BEGIN HEADER -->

<header class="header">
    {{-- <div class="header-top">
        <span>30% OFF ON ALL PRODUCTS ENTER CODE: beshop2020</span>
        <i class="header-top-close js-header-top-close icon-close"></i>
    </div> --}}
    <div class="header-content">
        <div class="header-logo" style="height: 50px;">
            <img src="{{asset('images/logo.png')}}" alt="" style="height: 100%;">
        </div>
        <div class="header-box">
            <ul class="header-nav">
                <li><a href="{{url('/')}}" class="@if($flag == 1)active @endif">Home</a></li>
                <li><a href="{{url('/about')}}" class="@if($flag == 8)active @endif">About us</a></li>
                <li><a href="{{url('/shop')}}" class="@if($flag == 2)active @endif">shop</a></li>
                <li><a href="{{url('/categories')}}" class="@if($flag == 3)active @endif">Categories</a></li>
                <li><a href="{{url('/blog')}}" class="@if($flag == 4)active @endif">blog</a></li>
                <li><a href="{{url('/contacts')}}" class="@if($flag == 5)active @endif">contact</a></li>
            </ul>
            <ul class="header-options" style="position: relative;">
                {{-- <li><a href="#"><i class="icon-search"></i></a></li> --}}
                @if(Auth::check())
                <li><a href="javascript:void(0);" id="user_profile"><i class="icon-user"></i></a>
                    <div id="sub_menuProfile">
                        <ul>
                            <li><a href="{{url('My-Profile')}}">Profile</i></a></li>
                            <li><a href="{{url('My-Address')}}">My Address</i></a></li>
                            <li><a href="{{url('My-Order')}}">My Order</i></a></li>
                            <li><a href="{{url('logout')}}">Logout</i></a></li>
                        </ul>
                    </div>
                </li>
             @else
                <li><a href="{{url('Web-login')}}"><i class="fa fa-power-off"></i></a></li>
            @endif
                
                @if(Auth::check())

                        @php
                                $cart_count = DB::table('wishlists')->where('user_id',Auth::id())->count();
                        @endphp
                        <li><a href="{{url('/wishlist')}}"><i class="icon-heart"></i><span>{{$cart_count}}</span></a></li>
                    @php
                            $cart_count = DB::table('carts')->where('user_id',Auth::id())->count();
                    @endphp
                            <li><a href="{{url('/my-cart')}}"><i class="icon-cart"></i><span>{{$cart_count}}</span></a></li>
                    @else
                        @php
                        $session = Session::getId();
                        $cart_count = DB::table('temp_carts')->where('session_id',$session)->count();
                    @endphp
                            <li><a href="{{url('/my-cart')}}"><i class="icon-cart"></i><span>{{$cart_count}}</span></a></li>
              @endif
            </ul>
        </div>

        <div class="btn-menu js-btn-menu"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></div>
    </div>
</header>

<!-- HEADER EOF   -->
    
    <!-- BEGIN FOOTER -->

    <footer class="footer">
        <div class="wrapper">
            <div class="footer-top">
                <div class="footer-top__social">
                    @php
                    $social_media = DB::table('social_media')->where('status', 1)->get();
                @endphp
                    <span>Find us here:</span>
                    <ul>
                        @foreach ($social_media as $item)
                        @if($item->social_media_name =='facebook' )<li><a href="{{$item->link}}"><i class="icon-facebook"></i></a></li>@endif
                        @if($item->social_media_name == 'twitter')<li><a href="{{$item->link}}"><i class="icon-twitter"></i></a></li>@endif
                        @if($item->social_media_name == 'instagram')<li><a href="{{$item->link}}"><i class="icon-insta"></i></a></li>@endif
                        @if($item->social_media_name ==  'linkedin')<li><a href="{{$item->link}}"><i class="icon-in"></i></a></li>@endif
                        @if($item->social_media_name ==  'youtube')<li><a href="{{$item->link}}"><i class="icon-youtube"></i></a></li>@endif
                        @endforeach
                        
                    </ul>
                </div>
                <div class="footer-top__logo">
                    <img data-src="{{asset('Website/img/logo.png')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                </div>
                <div class="footer-top__payments">
                    <span>Payment methods:</span>
                    <ul>
                        <li><img data-src="{{asset('Website/img/payment1.png')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt=""></li>
                        <li><img data-src="{{asset('Website/img/payment2.png')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt=""></li>
                        <li><img data-src="{{asset('Website/img/payment3.png')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt=""></li>
                        <li><img data-src="{{asset('Website/img/payment4.png')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="footer-nav">
                <div class="footer-nav__col">
                    <span class="footer-nav__col-title">Our company</span>
                    <ul>
                        <li><a href="{{url('about')}}">About us</a></li>
                        <li><a href="{{url('/categories')}}">Categories</a></li>
                        <li><a href="{{url('/shop')}}">Shop</a></li>
                        <li><a href="{{url('/blog')}}">Blog</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="{{url('/contacts')}}">Contacts</a></li>
                    </ul>
                </div>
                <div class="footer-nav__col">
                    {{-- <span class="footer-nav__col-title">Categories</span> --}}
                    <span class="footer-nav__col-title">Useful links</span>
                    <ul>
                        <li><a href="#">Make up</a></li>
                        <li><a href="#">SPA</a></li>
                        <li><a href="#">Perfume</a></li>
                        <li><a href="#">Nails</a></li>
                        <li><a href="#">Skin care</a></li>
                        <li><a href="#">Hair care</a></li>
                    </ul>
                </div>
                <div class="footer-nav__col">
                    <span class="footer-nav__col-title">Follow us</span>
                    <ul>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Shipping details</a></li>
                        <li><a href="#">Information</a></li>
                    </ul>
                </div>

                @php
                    $basic_info = DB::table('basic_info')->where('status', 1)->first();
                @endphp
                <div class="footer-nav__col">
                    <span class="footer-nav__col-title">Contact</span>
                    <ul>
                        <li><i class="icon-map-pin"></i>@if($basic_info->address) {{$basic_info->address}} @endif</li>
                        <li>
                            <i class="icon-smartphone"></i>
                            <div class="footer-nav__col-phones">
                                @if($basic_info->phone1)<a href="tel:{{$basic_info->phone1}}"> {{$basic_info->phone1}} </a>@endif
                                @if($basic_info->phone2)<a href="tel:{{$basic_info->phone2}}"> {{$basic_info->phone2}} </a>@endif
                            </div>
                        </li>
                        {{-- <li><i class="icon-mail"></i><a href="mailto:info@beshop.com">info@beshop.com</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="footer-copy">
                <span>&copy; All rights reserved. Bloom <?= date('Y'); ?></span>
            </div>
        </div>
    </footer>

    <!-- FOOTER EOF   -->



</div>

<div class="icon-load"></div>

<!-- BODY EOF   -->

<style>
    #sub_menuProfile
    {
        display: none;
        padding: 10px;
        background: white;       
        position: absolute;
        top: 22px;
        left: 5px;
    }
    #sub_menuProfile ul
    {
        line-height: 2;
    }
    #sub_menuProfile ul li
    {
        margin-left: 10px;
    }
    
     #user_profile:hover + #sub_menuProfile , #sub_menuProfile:hover
    {
        display: block;
    }
    .abt-text p{
        color: #000!important;
    }
</style>

<script src="{{asset('Website/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('Website/js/lazyload.min.js')}}"></script>
<script src="{{asset('Website/js/slick.min.js')}}"></script>
<script src="{{asset('Website/js/jquery.maskedinput.js')}}"></script>
<script src="{{asset('Website/js/custom.js')}}"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
@toastr_js
@toastr_render

<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script>
setTimeout(function(){
    var elem = document.createElement('script');
    elem.type = 'text/javascript';
    elem.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyD9GssJY7SsmdOeM6hWc-MRyyLX0IOAZYA';
    document.getElementsByTagName('body')[0].appendChild(elem);
}, 1500);
</script>

<script type="text/javascript">

    function counterUpdate(type, id) {
        //  alert(type);
        //  alert(id);
        $.ajax({
            type: 'post',
            url: "{{url('/cart-update')}}",
            data:{  "_token": "{{ csrf_token() }}", attribute_id:id, type : type},
            success: function(response){
                console.log(response)
            window.location.reload();
            // alert('product successfully deleted from cart');
            }
        });
    };

</script>

<script type="text/javascript">

    function removeProduct(id) {
        //  alert(id);
        $.ajax({
            type: 'post',
            url: "{{url('/remove-product')}}",
            data:{  "_token": "{{ csrf_token() }}", attribute_id:id},
            success: function(response){
                console.log(response)
            window.location.reload();
            // alert('product successfully deleted from cart');
            }
        });
    };

</script>

{{-- <script>
    $(document).ready(function()
    {
        $('#user_profile').click(function()
        {
            $('#sub_menuProfile').toggle();
        });
    });
</script> --}}

<script>
    $(document).ready(function(){
        $('.razorpay-payment-button').click();
    });
</script>

</body>

</html>