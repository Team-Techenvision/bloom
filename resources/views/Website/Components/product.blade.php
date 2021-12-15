 <!-- BEGIN DETAIL MAIN BLOCK -->
 <div class="detail-block detail-block_margin" style="background-image: url({{ asset('images/bg_banner.jpg')}})">
    <div class="wrapper">
        <div class="detail-block__content">
            <h1>Product Details</h1>
            <ul class="bread-crumbs">
                <li class="bread-crumbs__item">
                    <a href="#" class="bread-crumbs__link">Home</a>
                </li>
                <li class="bread-crumbs__item">
                    <a href="#" class="bread-crumbs__link">Shop</a>
                </li>
                <li class="bread-crumbs__item">Product Details Page</li>
            </ul>
        </div>
    </div>
</div>
<!-- DETAIL MAIN BLOCK EOF   -->
<!-- BEGIN PRODUCT -->
<div class="product">
    <div class="wrapper">
        <div class="product-content">
            <div class="product-slider">
                <div class="product-slider__main">
                    @foreach ($product_images as $item)
                        <div class="product-slider__main-item">
                            <div class="products-item__type">
                                <span class="products-item__sale">sale</span>
                            </div>
                            @if($item->product_image)
                                <img loading="lazy" src="{{asset($item->product_image)}}"  alt="{{$Products->key_words}}">
                            @else 
                                <img loading="lazy" src="https://via.placeholder.com/570" alt="{{$Products->key_words}}">
                            @endif
                        </div>
                    @endforeach
                    
                    {{-- <div class="product-slider__main-item">
                        <img loading="lazy" src="https://via.placeholder.com/570" alt="product">
                    </div>
                    <div class="product-slider__main-item">
                        <img loading="lazy" src="https://via.placeholder.com/570" alt="product">
                    </div>
                    <div class="product-slider__main-item">
                        <img loading="lazy" src="https://via.placeholder.com/570" alt="product">
                    </div>
                    <div class="product-slider__main-item">
                        <img loading="lazy" src="https://via.placeholder.com/570" alt="product">
                    </div> --}}
                </div>
                <div class="product-slider__nav">
                    @foreach ($product_images as $item)
                    <div class="product-slider__nav-item">
                        @if($item->product_image)
                            <img loading="lazy" src="{{asset($item->product_image)}}" class="img_url" alt="{{$Products->key_words}}">
                        @else
                            <img loading="lazy" src="https://via.placeholder.com/135" class="img_url" alt="{{$Products->key_words}}"> 
                        @endif
                    </div>
                    @endforeach
                    

                    {{-- <div class="product-slider__nav-item">
                        <img loading="lazy" src="https://via.placeholder.com/135" alt="product">
                    </div>
                    <div class="product-slider__nav-item">
                        <img loading="lazy" src="https://via.placeholder.com/135" alt="product">
                    </div>
                    <div class="product-slider__nav-item">
                        <img loading="lazy" src="https://via.placeholder.com/135" alt="product">
                    </div>
                    <div class="product-slider__nav-item">
                        <img loading="lazy" src="https://via.placeholder.com/135" alt="product">
                    </div>
                    <div class="product-slider__nav-item">
                        <img loading="lazy" src="https://via.placeholder.com/135" alt="product">
                    </div> --}}
                </div>
            </div>
            
            <div class="product-info">
                <h3>@if($Products->product_name){{$Products->product_name}}@endif</h3>
                <span class="product-stock">in stock</span>
                <span class="product-num">SKU: @if($Products->product_code) {{$Products->product_code}} @endif</span>
                @if($Products->special_price)
                <span class="product-price"><span>&#8377; {{$Products->price}}</span>&#8377; {{$Products->special_price}}</span>
                @else
                <span class="product-price"><span></span><i class="fas fa-rupee-sign"></i> {{$Products->price}}</span> 
                @endif
                <p>@if($Products->long_description){{$Products->short_description}} @endif </p>
                {{-- <div class="contacts-info__social">
                    <span>Find us here:</span>
                    <ul>   
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-insta"></i></a></li>
                        <li><a href="#"><i class="icon-in"></i></a></li>
                    </ul>
                </div> --}}
                <form action="{{url('/add-to-cart')}}" method="post" class="num-block">
                    @csrf
                <div class="product-options">
                    {{-- <div class="product-info__color">
                        <span>Сolor:</span>
                        <ul>
                            <li style="background-color: #FCEDEA;"></li>
                            <li style="background-color: #FEE1DB;"></li>
                            <li style="background-color: #FFD9D1;" class="active"></li>
                            <li style="background-color: #FDC5B9;"></li>
                            <li style="background-color: #FDB7A8;"></li>
                            <li style="background-color: #FFA08A;"></li>
                        </ul>
                    </div> --}}
                    <div class="product-info__quantity">
                        <span class="product-info__quantity-title">Quantity:</span>
                        <div class="counter-box">
                            <span class="counter-link counter-link__prev"><i class="icon-arrow"></i></span>
                            <input type="text" name="quantity" class="counter-input"  value="1">
                            <span class="counter-link counter-link__next"><i class="icon-arrow"></i></span>
                        </div>
                    </div>
                </div>               
                    <input type="hidden" name="products_id" id="product_id_detail_page" value="{{$Products->products_id}}">
                    <input type="hidden" name="attribute_id" id="attribute_id_detail_page" value="{{$Products->id}}">
                    <div class="product-buttons">
                    <button class="btn btn-icon btn-info" type="submit"><i class="icon-cart"></i> cart</button>
                    @if(Auth::check())
                    @php $user_id =Auth::user()->id; @endphp 
                    <a href="{{url('add-wishlist/'.$Products->products_id.'/'.$Products->id.'/'.$user_id)}}" class="btn btn-danger btn-icon btn-info"><i class="icon-heart"></i> wish</a>
                    @endif
                </div>
                </form>
            </div>
            
    
        </div>
        <div class="product-detail">
            <div class="tab-wrap product-detail-tabs">
                <ul class="nav-tab-list tabs">
                    <li>
                        <a href="#product-tab_1">Description</a>
                    </li>
                    <li class="active">
                        <a href="#product-tab_2">Reviews</a>
                    </li>
                </ul>
                <div class="box-tab-cont">
                    <div class="tab-cont hide" id="product-tab_1">
                        <p>{!!$Products->long_description!!}</p>                         
                    </div>
                    <div class="tab-cont product-reviews" id="product-tab_2">
                        <div class="product-detail__items">
                            @foreach ($Review as $item)
                            <div class="review-item">
                                <div class="review-item__head">
                                    <div class="review-item__author">
                                        <img data-src="https://via.placeholder.com/40"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
                                            alt="">
                                        <span class="review-item__name">{{$item->name}}</span>
                                        <span class="review-item__date">{{$item->created_at}}</span>
                                    </div>
                                    <div class="review-item__rating">
                                        <ul class="star-rating">
                                          <?php for($i = 1; $i <= $item->rating; $i++) { ?>
                                            <li><i class="icon-star"></i></li> 
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="review-item__content">
                                    {{$item->comment }}
                                </div>
                            </div> 
                            @endforeach
                            <div class="mt-3">
                                {{ $Review->links() }}
                            </div>
                            {{-- <div class="review-item">
                                <div class="review-item__head">
                                    <div class="review-item__author">
                                        <img data-src="https://via.placeholder.com/40"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
                                            alt="">
                                        <span class="review-item__name">Melissa Jones</span>
                                        <span class="review-item__date">July 23, 2020</span>
                                    </div>
                                    <div class="review-item__rating">
                                        <ul class="star-rating">
                                            <li><i class="icon-star"></i></li>
                                            <li><i class="icon-star"></i></li>
                                            <li><i class="icon-star"></i></li>
                                            <li><i class="icon-star"></i></li>
                                            <li><i class="icon-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="review-item__content">
                                    I am grateful to the employees of BeShop for the quality products that I
                                    have been using
                                    for more than a year, try to work at this level in the future. Thank
                                    you)
                                </div>
                            </div>
                            <div class="review-item">
                                <div class="review-item__head">
                                    <div class="review-item__author">
                                        <img data-src="https://via.placeholder.com/40"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
                                            alt="">
                                        <span class="review-item__name">Steve Gentley</span>
                                        <span class="review-item__date">July 05, 2020</span>
                                    </div>
                                    <div class="review-item__rating">
                                        <ul class="star-rating">
                                            <li><i class="icon-star"></i></li>
                                            <li><i class="icon-star"></i></li>
                                            <li><i class="icon-star"></i></li>
                                            <li><i class="icon-star"></i></li>
                                            <li><i class="icon-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="review-item__content">
                                    I am grateful to the employees of BeShop for the quality products that I have been using for more than a year, try to work at this level in the future. Thank you). I am grateful to the employees of BeShop for the quality products.
                                </div>
                            </div> --}}
                            {{-- <div class="review-item">
                                <div class="review-item__head">
                                    <div class="review-item__author">
                                        <img data-src="https://via.placeholder.com/40"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
                                            alt="">
                                        <span class="review-item__name">Amanda Clement</span>
                                        <span class="review-item__date">June 15, 2020</span>
                                    </div>
                                    <div class="review-item__rating">
                                        <ul class="star-rating">
                                            <li><i class="icon-star"></i></li>
                                            <li><i class="icon-star"></i></li>
                                            <li><i class="icon-star"></i></li>
                                            <li><i class="icon-star"></i></li>
                                            <li><i class="icon-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="review-item__content">
                                    I am grateful to the employees of BeShop for the quality products that I
                                    have been using
                                    for more than a year, try to work at this level in the future. Thank
                                    you)
                                </div>
                            </div> --}}
                            {{-- <a href="#" class="blog-item__link">show more <i
                                    class="icon-arrow-md"></i></a> --}}
                        </div>
                        @if (Auth::check())
                        <div class="product-detail__form post-comment__form">
                            <div class="subscribe-form__img">
                                <img data-src="{{asset('images/subscribe-img.png')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                                    class="js-img" alt="">
                            </div>
                            @php
                                $user_info = DB::table('users')->where('id',Auth::user()->id)->where('status',1)->first();
                            @endphp
                            <form action="{{url('product-review-submit')}}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$Products->products_id}}">
                                <h4>leave a review</h4>
                                <p>Your email address will not be published.</p>
                                <div class="rating" data-id="rating_1"></div>
                                <div class="box-field">
                                    <input type="text" class="form-control" placeholder="Enter your name" value="{{$user_info->name}}">
                                </div>
                                <div class="box-field">
                                    <select id="review-stars" class="form-control" name="rating" >
                                        <option value="5">5 Stars Rating</option>
                                        <option value="4">4 Stars Rating</option>
                                        <option value="3">3 Stars Rating</option>
                                        <option value="2">2 Stars Rating</option>
                                        <option value="1">1 Stars Rating</option>
                                    </select>
                                </div>
                                <div class="box-field">
                                    <input type="email" class="form-control" placeholder="Enter your email" value="{{$user_info->email}}">
                                </div>
                                <div class="box-field box-field__textarea">
                                    <textarea class="form-control" name="comment"
                                        placeholder="Enter your review"></textarea>
                                </div>
                                <button type="submit" class="btn">send</button>
                            </form>
                        </div>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="promo-video__decor js-img" data-src="{{asset('img/promo-video__decor.jpg')}}"
        src="{{asset('img/promo-video__decor.jpg')}}" alt="">
</div>
<!-- PRODUCT EOF   -->
<!-- BEGIN NEW ARRIVALS -->
<section class="arrivals product-viewed">
    <div class="trending-top">
        <span class="saint-text">Similar Products</span>
        <h2>You May Like</h2>
        <p>Nourish your skin with toxin-free cosmetic products. With the offers that you can’t refuse.</p>
    </div>
    <div class="products-items js-products-items">
        @foreach ($Simillar_products as $item)
        <a href="{{url('/ProductDetail')}}/{{$item->products_id}}" class="products-item">
            <div class="products-item__type">
                <span class="products-item__new">new</span>
            </div>
            <div class="products-item__img">                             
                <img @if($item->product_image) data-src="{{asset($item->product_image)}}" @else data-src="https://via.placeholder.com/262x370" @endif src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                <div class="products-item__hover">
                    <i class="icon-search"></i>
                    <div class="products-item__hover-options">
                        {{-- <i class="icon-heart"></i>
                        <i class="icon-cart"></i> --}}
                    </div>
                </div>
            </div>
            <div class="products-item__info">
                <span class="products-item__name">{{$item->product_name}}</span>
                @if($item->special_price)
                    <span class="products-item__cost">&#8377; {{$item->special_price}}</span>
                @else 
                    <span class="products-item__cost">&#8377; {{$item->price}}</span>
                @endif
                
            </div>
        </a>
        
        @endforeach
        
        
    </div>
</section>
<!-- NEW ARRIVALS EOF   -->
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

<style>
    .products-items .products-item__img 
    {
        height:260px;
    }
</style>
