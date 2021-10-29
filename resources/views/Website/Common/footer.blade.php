    <!-- BEGIN HEADER -->

    <header class="header">
        <div class="header-top">
            <span>30% OFF ON ALL PRODUCTS ENTER CODE: beshop2020</span>
            <i class="header-top-close js-header-top-close icon-close"></i>
        </div>
        <div class="header-content">
            <div class="header-logo">
                <img src="img/header-logo.svg" alt="">
            </div>
            <div class="header-box">
                <ul class="header-nav">
                    <li><a href="{{url('/')}}" class="active">Home</a></li>
                    <li><a href="#">pages</a>
                        <ul>
                            <li><a href="{{('/about')}}">About us</a></li>
                            <li><a href="{{url('/faq')}}">FAQ</a></li>
                            <li><a href="{{url('/profile')}}">My profile</a></li>
                            <li><a href="{{url('/login')}}">Login</a></li>
                            <li><a href="{{('/registration')}}">Registration</a></li>
                            <li><a href="{{('/product')}}">Product</a></li>
                            <li><a href="{{('/post')}}">Post</a></li>
                            <li><a href="{{('/checkout1')}}">Checkout1</a></li>
                            <li><a href="{{('/checkout2')}}">Checkout2</a></li>
                            <li><a href="{{('/checkout3')}}">Checkout3</a></li>
                            {{-- <li><a href="404.html">404</a></li> --}}
                            <li><a href="{{url('/cart')}}">Cart</a></li>
                            <li><a href="{{url('/wishlist')}}">Wishlist</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('/shop')}}">shop</a></li>
                    <li><a href="{{url('/categories')}}">Categories</a></li>
                    <li><a href="{{url('/blog')}}">blog</a></li>
                    <li><a href="{{url('/contacts')}}">contact</a></li>
                </ul>
                <ul class="header-options">
                    <li><a href="#"><i class="icon-search"></i></a></li>
                    <li><a href="#"><i class="icon-user"></i></a></li>
                    <li><a href="{{url('/wishlist')}}"><i class="icon-heart"></i></a></li>
                    <li><a href="{{url('/cart')}}"><i class="icon-cart"></i><span>0</span></a></li>
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
                        <span>Find us here:</span>
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-insta"></i></a></li>
                            <li><a href="#"><i class="icon-in"></i></a></li>
                        </ul>
                    </div>
                    <div class="footer-top__logo">
                        <img data-src="{{asset('img/footer-logo.svg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                    </div>
                    <div class="footer-top__payments">
                        <span>Payment methods:</span>
                        <ul>
                            <li><img data-src="{{asset('img/payment1.png')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt=""></li>
                            <li><img data-src="{{asset('img/payment2.png')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt=""></li>
                            <li><img data-src="{{asset('img/payment3.png')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt=""></li>
                            <li><img data-src="{{asset('img/payment4.png')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-nav">
                    <div class="footer-nav__col">
                        <span class="footer-nav__col-title">About</span>
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
                        <span class="footer-nav__col-title">Categories</span>
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
                        <span class="footer-nav__col-title">Useful links</span>
                        <ul>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Shipping details</a></li>
                            <li><a href="#">Information</a></li>
                        </ul>
                    </div>
                    <div class="footer-nav__col">
                        <span class="footer-nav__col-title">Contact</span>
                        <ul>
                            <li><i class="icon-map-pin"></i> 27 Division St, New York, NY 10002, USA</li>
                            <li>
                                <i class="icon-smartphone"></i>
                                <div class="footer-nav__col-phones">
                                    <a href="tel:+13459971345">+1 345 99 71 345</a>
                                    <a href="tel:+13457464975">+1 345 74 64 975</a>
                                </div>
                            </li>
                            <li><i class="icon-mail"></i><a href="mailto:info@beshop.com">info@beshop.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-copy">
                    <span>&copy; All rights reserved. BeShop 2020</span>
                </div>
            </div>
        </footer>

        <!-- FOOTER EOF   -->



    </div>

<div class="icon-load"></div>

<!-- BODY EOF   -->

<script src="{{asset('Website/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('Website/js/lazyload.min.js')}}"></script>
<script src="{{asset('Website/js/slick.min.js')}}"></script>
<script src="{{asset('Website/js/jquery.maskedinput.js')}}"></script>
<script src="{{asset('Website/js/custom.js')}}"></script>


<script>
    setTimeout(function(){
        var elem = document.createElement('script');
        elem.type = 'text/javascript';
        elem.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyD9GssJY7SsmdOeM6hWc-MRyyLX0IOAZYA';
        document.getElementsByTagName('body')[0].appendChild(elem);
    }, 1500);
</script>
</body>

</html>