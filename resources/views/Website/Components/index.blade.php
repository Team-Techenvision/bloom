<!-- BEGIN MAIN BLOCK -->
<div class="main-block load-bg" style="background-image: url({{$banner->banner_image}})">
    <div class="wrapper">
        <div class="main-block__content">
            {{-- <span class="saint-text">Professional</span>
            <h1 class="main-text">Beauty & Care</h1>
            <p>Nourish your skin with toxin-free cosmetic products. With the offers that you can’t refuse.
            </p>
            <a href="#" class="btn btn-info">Shop now</a> --}}
        </div>
    </div>
</div>
<!-- MAIN BLOCK EOF -->
<!-- BEGIN TRENDING -->
<section class="trending">
    <div class="trending-content">
        <div class="trending-top">
            <span class="saint-text">Cosmetics</span>
            <h2>Trending products</h2>
            <p>Nourish your skin with toxin-free cosmetic products. With the offers that you can’t refuse.
            </p>
        </div>
        <div class="tab-wrap trending-tabs">
            <ul class="nav-tab-list tabs">                
                  <?php  $i = 1;?>
                @foreach ($categories_contain as $item)
                    <?php $statusClass  = ""; ?>
                    @if($i== 1)
                        <?php  $statusClass = "active"; ?>
                    @endif
                     
                    <li class="{{$statusClass}}">
                        <a href="#trending-tab_{{$i}}">{{$item->category_name}}</a>
                    </li> 
                    <?php $i++ ?>
                @endforeach
                
                
            </ul>
            <div class="box-tab-cont">
                
                <?php $i = 1; ?>
                @if($categories_contain)
                    @foreach ($categories_contain as $item)
                        <div class="tab-cont" id="trending-tab_{{$i++}}">
                            <div class="products-items js-products-items">
                                <?php 
                                $Products = DB::table('products')
                                ->join('category', 'category.id', '=', 'products.category_id')
                                ->join('product_attributes','product_attributes.products_id','=','products.products_id')         
                                ->join('product_images', 'product_images.products_id', '=', 'products.products_id')           
                                ->select('products.*','product_attributes.price','product_attributes.special_price','product_images.product_image')
                                ->where("products.status",1)
                                ->where("product_images.type",2)
                                ->where("products.category_id",$item->id)
                                ->get(); ?>
                                @foreach ($Products as $list)
                                    <a href="{{url('/ProductDetail')}}/{{$list->products_id}}" class="products-item">
                                        <div class="products-item__type">
                                            <span class="products-item__sale">sale</span>
                                        </div>
                                        <div class="products-item__img">
                                            <img @if($list->product_image) data-src="{{asset($list->product_image)}}"  @else data-src="{{asset('Website/img/image/luchiana-1959282579.jpg')}}" @endif src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                                            <div class="products-item__hover">
                                                <i class="icon-search"></i>
                                                <div class="products-item__hover-options">
                                                    {{-- <i class="icon-heart"></i>
                                                    <i class="icon-cart"></i> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="products-item__info">
                                            <span class="products-item__name">{{$list->product_name}}</span>
                                            @if($list->special_price)
                                                <span class="products-item__cost">&#8377; {{$list->special_price}}</span>
                                            @else 
                                                <span class="products-item__cost">&#8377; {{$list->price}}</span>
                                            @endif
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                @endif    
                
                
            </div>
        </div>

    </div>
</section>
<!-- TRENDING EOF   -->
<!-- BEGIN LOGOS -->
<div class="main-logos">
    <img data-src="{{asset('Website/img/main-logo1.svg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
    <img data-src="{{asset('Website/img/main-logo2.svg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
    <img data-src="{{asset('Website/img/main-logo3.svg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
    <img data-src="{{asset('Website/img/main-logo4.svg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
    <img data-src="{{asset('Website/img/main-logo5.svg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
</div>
<!-- LOGOS EOF   -->
<!-- BEGIN DISCOUNT -->
<div class="discount js-img" data-src="{{asset('Website/img/image/luchiana-16599450811.jpg')}}">
    <!--https://via.placeholder.com/1920x900-->
    <div class="wrapper">
        <div class="discount-info">
            <span class="saint-text">Discount</span>
            <span class="main-text">Get Your <span>50%</span> Off</span>
            <p>Nourish your skin with toxin-free cosmetic products. With the offers that you can’t refuse.
            </p>
            <a href="#" class="btn btn-info">get now!</a>
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
<!-- BEGIN TOP CATEGORIES -->
<section class="top-categories">
    <div class="top-categories__text">
        <span class="saint-text">Popular collections</span>
        <h2>top categories</h2>
        <p>Nourish your skin with toxin-free cosmetic products. With the offers that you can’t refuse.</p>
    </div>
    <div class="top-categories__items">

        @if($categories_contain)
        @foreach ($categories_contain as $item)
        <a href="{{url('/ProductList')}}/{{$item->id}}" class="top-categories__item">
            <img data-src="{{asset($item->category_image)}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="" style="object-fit: unset;">
            <div class="top-categories__item-hover">
                <h5>{{$item->category_name}}</h5>
                <span>browse products -</span>
                <i class="icon-arrow-lg"></i>
            </div>
        </a>
        @endforeach
    @endif
 
    </div>
</section>
<!-- TOP CATEGORIES EOF   -->
<!-- BEGIN INFO BLOCKS -->
<div class="info-blocks">
    <div class="info-blocks__item js-img" data-src="{{asset('Website/img/image/luchiana-1659945081.jpg')}}">
        <div class="wrapper">
            <div class="info-blocks__item-img"> <!----------https://via.placeholder.com/960x900----------------->
                <img data-src="{{asset('Website/img/image/luchiana-1658108654.jpg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
            </div>
            <div class="info-blocks__item-text">
                <span class="saint-text">Check This Out</span>
                <h2>new collection for delicate skin</h2>
                <span class="info-blocks__item-descr">Nourish your skin with toxin-free cosmetic products.
                    With the offers that you can’t refuse.</span>
                <p>Non aliqua reprehenderit reprehenderit culpa laboris nulla minim anim velit adipisicing ea aliqua alluptate sit do do.Non aliqua reprehenderit reprehenderit culpa laboris nulla minim anim velit adipisicing ea aliqua alluptate
                    sit do do.Non aliqua reprehenderit reprehenderit culpa laboris nulla minim.</p>
                <a href="#" class="btn btn-info">Shop now</a>
            </div>
        </div>

    </div>
    <div class="info-blocks__item info-blocks__item-reverse js-img" data-src="{{asset('Website/img/image/coconut-soap-HWRZKN3-683x1024-1-200x3001.jpg')}}">
        <div class="wrapper">
            <div class="info-blocks__item-img">
                <img data-src="{{asset('Website/img/image/Image-3KGQSJN-1024x683-1-300x200.jpg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                <iframe allowfullscreen></iframe>
                <div class="info-blocks__item-img-overlay">
                    <span>Promotion video</span>
                    <div class="info-blocks__item-img-play">
                        <img data-src="{{asset('Website/img/image/play-white-1.png')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                    </div>
                </div>
            </div>
            <div class="info-blocks__item-text">
                <span class="saint-text">About Us</span>
                <h2>Who we are</h2>
                <span class="info-blocks__item-descr1">
                   <p> Our LIP Balms,moisturizer, Lotions & Soaps are made out of Shea,Cocoa,Mango,Avacado, Soy Butters, and completely free from SLS, Sulphates & Parabens.Forming the range of stores, we, above all, strive not only to meet the format of "home shop", offering each customer the most basic household goods, but also to create a unique space of beauty and care. BeShope stores offer their customers the widest and highest quality selection of products from world-renowned manufacturers.</p></span>
                <p>We take lots of care to ensure that every products is loaded with Vitamin E and carrier oils like Almond, Avacado, Argan Oil, Olive Oil, Castor oil etc and also Glycering to keep your skin hydrated throught out. We use pure essential oils in all our products,which adds up to enhanced texture of skin and hairs.Also skin absorbs the essential oils and keeps you overall whole and healthy.</p>
                <a href="#" class="info-blocks__item-link">
                    <i class="icon-video"></i> Watch video about us
                    <i class="icon-arrow-lg"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- INFO BLOCKS EOF   -->
<!-- BEGIN NEW ARRIVALS -->
<section class="arrivals">
    <div class="trending-top">
        <span class="saint-text">Cosmetics</span>
        <h2>New arrivals</h2>
        <p>Nourish your skin with toxin-free cosmetic products. With the offers that you can’t refuse.</p>
    </div>
    <div class="products-items js-products-items">
        <a href="#" class="products-item">
            <div class="products-item__type">
                <span class="products-item__sale">sale</span>
                <span class="products-item__new">new</span>
            </div>
            <div class="products-item__img">
                <img data-src="{{asset('Website/img/image/Image-3KGQSJN-1024x683-1-300x200.jpg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                <div class="products-item__hover">
                    <i class="icon-search"></i>
                    <div class="products-item__hover-options">
                        <i class="icon-heart"></i>
                        <i class="icon-cart"></i>
                    </div>
                </div>
            </div>
            <div class="products-item__info">
                <span class="products-item__name">Detox body Cream</span>
                <span class="products-item__cost"><span>$249.95</span> $200.95</span>
            </div>
        </a>
        <a href="#" class="products-item">
            <div class="products-item__type">
                <span class="products-item__new">new</span>
            </div>
            <div class="products-item__img">
                <img data-src="{{asset('Website/img/image/luchiana-1959487418-460x259.jpg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                <div class="products-item__hover">
                    <i class="icon-search"></i>
                    <div class="products-item__hover-options">
                        <i class="icon-heart"></i>
                        <i class="icon-cart"></i>
                    </div>
                </div>
            </div>
            <div class="products-item__info">
                <span class="products-item__name">Detox body Cream</span>
                <span class="products-item__cost">$200.95</span>
            </div>
        </a>
        <a href="#" class="products-item">
            <div class="products-item__type">
                <span class="products-item__new">new</span>
            </div>
            <div class="products-item__img">
                <img data-src="{{asset('Website/img/image/Image.jpg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                <div class="products-item__hover">
                    <i class="icon-search"></i>
                    <div class="products-item__hover-options">
                        <i class="icon-heart"></i>
                        <i class="icon-cart"></i>
                    </div>
                </div>
            </div>
            <div class="products-item__info">
                <span class="products-item__name">Detox body Cream</span>
                <span class="products-item__cost">$200.95</span>
            </div>
        </a>
        <a href="#" class="products-item">
            <div class="products-item__type">
                <span class="products-item__sale">sale</span>
                <span class="products-item__new">new</span>
            </div>
            <div class="products-item__img">
                <img data-src="{{asset('Website/img/image/luchiana-1959282579.jpg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                <div class="products-item__hover">
                    <i class="icon-search"></i>
                    <div class="products-item__hover-options">
                        <i class="icon-heart"></i>
                        <i class="icon-cart"></i>
                    </div>
                </div>
            </div>
            <div class="products-item__info">
                <span class="products-item__name">Detox body Cream</span>
                <span class="products-item__cost"><span>$249.95</span> $200.95</span>
            </div>
        </a>
        <a href="#" class="products-item">
            <div class="products-item__type">
                <span class="products-item__sale">sale</span>
            </div>
            <div class="products-item__img">
                <img data-src="{{asset('Website/img/image/coconut-soap-HWRZKN3-683x1024-1-200x300.jpg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                <div class="products-item__hover">
                    <i class="icon-search"></i>
                    <div class="products-item__hover-options">
                        <i class="icon-heart"></i>
                        <i class="icon-cart"></i>
                    </div>
                </div>
            </div>
            <div class="products-item__info">
                <span class="products-item__name">Detox body Cream</span>
                <span class="products-item__cost"><span>$249.95</span> $200.95</span>
            </div>
        </a>
    </div>
</section>
<!-- NEW ARRIVALS EOF   -->
<!-- BEGIN LATEST NEWS -->
<section class="latest-news">
    <div class="wrapper">
        <div class="trending-top">
            <span class="saint-text">Our blog</span>
            <h2>The latest news at BeShop</h2>
            <p>Nourish your skin with toxin-free cosmetic products. With the offers that you can’t refuse.
            </p>
        </div>
        <div class="blog-items">
            <div class="blog-item">
                <a href="#" class="blog-item__img">
                    <img data-src="{{asset('Website/img/image/luchiana-1959282579.jpg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                    <span class="blog-item__date">
                        <span>Aug</span> 10
                    </span>
                </a>
                <a href="#" class="blog-item__title">Best multi-step skin care treatment</a>
                <p>Nourish your skin with toxin-free cosmetic products. With the offers that yo skin with toxin-free cosmetic products that you can’t refuse.</p>
                <a href="#" class="blog-item__link">Read more <i class="icon-arrow-md"></i></a>
            </div>
            <div class="blog-item">
                <a href="#" class="blog-item__img">
                    <img data-src="{{asset('Website/img/image/coconut-soap-HWRZKN3-683x1024-1-200x300.jpg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                    <span class="blog-item__date">
                        <span>Aug</span> 08
                    </span>
                </a>
                <a href="#" class="blog-item__title">Best multi-step skin care treatment</a>
                <p>Nourish your skin with toxin-free cosmetic products. With the offers that yo skin with toxin-free cosmetic products that you can’t refuse.</p>
                <a href="#" class="blog-item__link">Read more <i class="icon-arrow-md"></i></a>
            </div>
        </div>
        <div class="latest-news__btn">
            <a href="#" class="btn btn-info">Read blog</a>
        </div>
    </div>
</section>
<!-- LATEST NEWS EOF   -->



<!-- BEGIN ADVANTAGES -->
<div class="advantages">
<div class="wrapper">
<div class="trending-top">
<span class="saint-text">Our Plans</span>
<h2>Subcription Plans</h2>
</div>
<div class="advantages-items">
@foreach ($plans as $item)
<div class="advantages-item pricing-card">
{{-- <div class="advantages-item__icon">
<i class="icon-natural"></i>
</div> --}}
<h4>{{$item->plan_name}}</h4>
<h2> RS. {{$item->price}}</h2>
<p>{!!$item->description!!}</p>
<a href="#" class="btn btn-info" style="margin-top: 30px;">Sign Up</a>
</div>
@endforeach
</div>
</div>
</div>
<!-- ADVANTAGES EOF -->

<!-- ADVANTAGES EOF   -->

<!-- BEGIN SUBSCRIBE -->
<div class="subscribe">
    <div class="wrapper">
        <div class="subscribe-form">
            <div class="subscribe-form__img">
                <img data-src="{{asset('Website/img/image/logo1.png')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
            </div>
            <form>
                <h3>Stay in touch</h3>
                <p>Nourish your skin with toxin-free cosmetic roducts.</p>
                <div class="box-field__row">
                    <div class="box-field">
                        <input type="email" class="form-control" placeholder="Enter your email">
                    </div>
                    <button type="submit" class="btn btn-info">subscribe</button>
                </div>
            </form>
        </div>
    </div>
</div>
 <!-- SUBSCRIBE EOF   -->

 {{-- ====================================================================== --}}
<!-- BEGIN INSTA PHOTOS -->
<div class="insta-photos">
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
</div>
<!-- INSTA PHOTOS EOF   -->
<style>
    .products-item__img {
        height:260px;
    }
</style>