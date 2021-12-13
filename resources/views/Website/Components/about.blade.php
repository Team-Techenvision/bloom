 <!-- BEGIN DETAIL MAIN BLOCK -->
 <div class="detail-block" style="background-image: url('Website/img/image/spa-soap-composition-with-orchid-3ZF6FTM.jpg');">
    <div class="wrapper">
        <div class="detail-block__content">
            <h1>About</h1>
            {{-- <ul class="bread-crumbs">
                <li class="bread-crumbs__item">
                    <a href="index.html" class="bread-crumbs__link">Home</a>
                </li>
                <li class="bread-crumbs__item">About</li>
            </ul> --}}
            <div class="detail-block__items">
                <div class="detail-block__item">
                    <div class="detail-block__item-icon">
                        <img data-src="img/main-text-decor.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                        <i class="icon-shipping"></i>
                    </div>
                    <div class="detail-block__item-info">
                        <h6>Free Shipping</h6>
                        World wide
                    </div>
                </div>
                <div class="detail-block__item">
                    <div class="detail-block__item-icon">
                        <img data-src="img/main-text-decor.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                        <i class="icon-helpline"></i>
                    </div>
                    <div class="detail-block__item-info">
                        <h6>Helpline</h6>
                        +1 345 99 71 345
                    </div>
                </div>
                <div class="detail-block__item">
                    <div class="detail-block__item-icon">
                        <img data-src="img/main-text-decor.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                        <i class="icon-24"></i>
                    </div>
                    <div class="detail-block__item-info">
                        <h6>24x7 Extensive</h6>
                        Customer Support
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- DETAIL MAIN BLOCK EOF   -->
<!-- BEGIN PROMO VIDEO -->
<section class="promo-video">
    <div class="wrapper">
        <div class="trending-top">
            <span class="saint-text">Promotion video</span>
            <h2>Welcome to Bloom</h2>
            <p>Today we can offer our customers exclusive products of 108 brands marked "only in BeShope"</p>
        </div>
        <div class="promo-video__block">
            <img data-src="{{asset('Website/img/image/luchiana-1959282579.jpg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
            <iframe allowfullscreen></iframe>
            <div class="info-blocks__item-img-overlay">
                <span>Promotion video</span>
                <div class="info-blocks__item-img-play">
                    <img data-src="{{asset('Website/img/image/play-white-1.png')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                </div>
            </div>
        </div>
        <div class="promo-video__nums">
            <div class="promo-video__num">
                <span>2300+</span>
                <h5>Products</h5>
            </div>
            <div class="promo-video__num">
                <span>108</span>
                <h5>brands</h5>
            </div>
            <div class="promo-video__num">
                <span>32</span>
                <h5>partners</h5>
            </div>
            <div class="promo-video__num">
                <span>618+</span>
                <h5>customers</h5>
            </div>
        </div>
    </div>
    <img class="promo-video__decor js-img" data-src="{{asset('img/promo-video__decor.jpg')}}"
    src="{{asset('img/promo-video__decor.jpg')}}" alt="">
</section>
<!-- PROMO VIDEO EOF   -->
@php
$about_us = DB::table('about_us')->where('status', 1)->first();
// print_r($testimonial);
@endphp
<!-- BEGIN DISCOUNT -->
<div class="discount discount-about js-img" data-src="{{asset($about_us->bg_image)}}">
    <div class="wrapper">
        <div class="discount-info1" style="background-color: rgba(252, 236, 239, 0.668);padding:30px 25px;">
            <span class="saint-text" style="text-align: center; color: #000;">Welcome to Bloom</span>
            <h2 style="text-align: center; color: #000;">About Us</h2>
            <div class="abt-text">{!!$about_us->content!!}</div>
            {{-- <p style="color: #000000;">Our LIP Balms,moisturizer, Lotions & Soaps are made out of Shea,Cocoa,Mango,Avacado, Soy Butters, and completely free from SLS, Sulphates & Parabens.</p>
            <p class="" style="color: #000000">Forming the range of stores, we, above all, strive not only to meet the format of "home shop", offering each customer the most basic household goods, but also to create a unique space of beauty and care. BeShope stores offer their customers the widest and highest quality selection of products from world-renowned manufacturers.</p>
            <p style="color: #000000">We take lots of care to ensure that every products is loaded with Vitamin E and carrier oils like Almond, Avacado, Argan Oil, Olive Oil, Castor oil etc and also Glycering to keep your skin hydrated throught out. We use pure essential oils in all our products,which adds up to enhanced texture of skin and hairs.Also skin absorbs the essential oils and keeps you overall whole and healthy.</p> --}}
            <a href="Javascript:Void(0);" class="btn btn-info" style="margin-top: 15px;">Shop now</a>
        </div>
    </div>
</div>
<!-- DISCOUNT EOF   -->
<!-- BEGIN ADVANTAGES -->
<div class="advantages">
    <div class="wrapper">
        <div class="advantages-items">
            <div class="advantages-item">
                <div class="advantages-item__icon">
                    <i class="icon-natural"></i>
                </div>
                <h4>natural</h4>
                <p>Non aliqua reprehenderit reprehenderit culpa laboris nulla minim anim velit adipisicing ea aliqua alluptate sit do do.</p>
            </div>
            <div class="advantages-item">
                <div class="advantages-item__icon">
                    <i class="icon-quality"></i>
                </div>
                <h4>Quality</h4>
                <p>Non aliqua reprehenderit reprehenderit culpa laboris nulla minim aelit adipisicing ea aliqua alluptate sit do do.</p>
            </div>
            <div class="advantages-item">
                <div class="advantages-item__icon">
                    <i class="icon-organic"></i>
                </div>
                <h4>organic</h4>
                <p>Non aliqua reprehenderit reprehenderit a laboris nulla minim anim velit adipisicing ea aliqua alluptate sit do do.</p>
            </div>
        </div>
    </div>
</div>
<!-- ADVANTAGES EOF   -->
<!-- BEGIN TESTIMONIALS -->
<section class="testimonials">
    <div class="wrapper">
        <div class="trending-top">
            <span class="saint-text">They say</span>
            <h2>testimonials</h2>
        </div>
        <div class="testimonials-slider js-testimonials-slider">

            @php
                $testimonial = DB::table('testimonials')->where('status','=', 1)->get();
                // print_r($testimonial);
            @endphp
            @foreach ($testimonial as $item)
            <div class="testimonials-slide">
                <p>
                   {!!$item->description!!}
                </p>
                <div class="testimonials-author">
                    <img data-src="{{$item->images}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                    <h5>{{$item->customer_name}}</h5>
                </div>
            </div>
            @endforeach
            
            {{-- <div class="testimonials-slide">
                <p>
                    I am grateful to the employees of Bloom for the quality products that I have been using for more than a year, try to work at this level
                    in the future. Thank you)
                </p>
                <div class="testimonials-author">
                    <img data-src="https://via.placeholder.com/50" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                    <h5>Melissa Gahan</h5>
                </div>
            </div> --}}
        </div>
    </div>
</section>
<!-- TESTIMONIALS EOF   -->
<!-- BEGIN SUBSCRIBE -->
<div class="subscribe mb-5">
    <div class="wrapper">
        <div class="subscribe-form">
            <div class="subscribe-form__img">
                <img data-src="{{asset('Website/img/image/logo1.png')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                    class="js-img" alt="">
            </div>
            <form>
                <h3>Stay in touch</h3>
                <p>Nourish your skin with toxin-free cosmetic roducts.</p>
                <div class="box-field__row">
                    <div class="box-field">
                        <input type="text" class="form-control" placeholder="Enter your email">
                    </div>
                    <button type="submit" class="btn btn-info">subscribe</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- SUBSCRIBE EOF   -->
<!-- BEGIN INSTA PHOTOS -->
<!--<div class="insta-photos">-->
<!--    <a href="#" class="insta-photo">-->
<!--        <img data-src="https://via.placeholder.com/320" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"-->
<!--            alt="">-->
<!--        <div class="insta-photo__hover">-->
<!--            <i class="icon-insta"></i>-->
<!--        </div>-->
<!--    </a>-->
<!--    <a href="#" class="insta-photo">-->
<!--        <img data-src="https://via.placeholder.com/320" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"-->
<!--            alt="">-->
<!--        <div class="insta-photo__hover">-->
<!--            <i class="icon-insta"></i>-->
<!--        </div>-->
<!--    </a>-->
<!--    <a href="#" class="insta-photo">-->
<!--        <img data-src="https://via.placeholder.com/320" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"-->
<!--            alt="">-->
<!--        <div class="insta-photo__hover">-->
<!--            <i class="icon-insta"></i>-->
<!--        </div>-->
<!--    </a>-->
<!--    <a href="#" class="insta-photo">-->
<!--        <img data-src="https://via.placeholder.com/320" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"-->
<!--            alt="">-->
<!--        <div class="insta-photo__hover">-->
<!--            <i class="icon-insta"></i>-->
<!--        </div>-->
<!--    </a>-->
<!--    <a href="#" class="insta-photo">-->
<!--        <img data-src="https://via.placeholder.com/320" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"-->
<!--            alt="">-->
<!--        <div class="insta-photo__hover">-->
<!--            <i class="icon-insta"></i>-->
<!--        </div>-->
<!--    </a>-->
<!--    <a href="#" class="insta-photo">-->
<!--        <img data-src="https://via.placeholder.com/320" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"-->
<!--            alt="">-->
<!--        <div class="insta-photo__hover">-->
<!--            <i class="icon-insta"></i>-->
<!--        </div>-->
<!--    </a>-->
    
<!--</div>-->
<!-- INSTA PHOTOS EOF   -->
 {{-- ====================================================================== --}}
<!-- BEGIN INSTA PHOTOS -->
{{-- <div class="insta-photos">
    <a href="#" class="insta-photo"> <!---- https://via.placeholder.com/320 ----->
        <img data-src="{{asset('Website/img/image/Image-3KGQSJN-1024x683-1-300x200.jpg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
        <div class="insta-photo__hover">
            <i class="icon-insta"></i>
        </div>
    </a>
    <a href="#" class="insta-photo">
        <img data-src="{{asset('Website/img/image/luchiana-1959487418-460x259.jpg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
        <div class="insta-photo__hover">
            <i class="icon-insta"></i>
        </div>
    </a>
    <a href="#" class="insta-photo">
        <img data-src="{{asset('Website/img/image/Image.jpg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
        <div class="insta-photo__hover">
            <i class="icon-insta"></i>
        </div>
    </a>
    <a href="#" class="insta-photo">
        <img data-src="{{asset('Website/img/image/Image-3KGQSJN-1024x683-1-300x200.jpg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
        <div class="insta-photo__hover">
            <i class="icon-insta"></i>
        </div>
    </a>
    <a href="#" class="insta-photo">
        <img data-src="{{asset('Website/img/image/luchiana-1959282579.jpg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
        <div class="insta-photo__hover">
            <i class="icon-insta"></i>
        </div>
    </a>
    <a href="#" class="insta-photo">
        <img data-src="{{asset('Website/img/image/Image.jpg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
        <div class="insta-photo__hover">
            <i class="icon-insta"></i>
        </div>
    </a>
</div> --}}
<!-- INSTA PHOTOS EOF   -->