 <!-- BEGIN DETAIL MAIN BLOCK -->
 <div class="detail-block detail-block_margin" style="background-image: url({{('images/bg_banner.jpg')}})">
    <div class="wrapper">
        <div class="detail-block__content">
            <h1>Wishlist</h1>
            <ul class="bread-crumbs">
                <li class="bread-crumbs__item">
                    <a href="#" class="bread-crumbs__link">Home</a>
                </li>
                <li class="bread-crumbs__item">Wishlist</li>
            </ul>
        </div>
    </div>
</div>
<!-- DETAIL MAIN BLOCK EOF   -->
<!-- BEGIN WISHLIST -->
<div class="wishlist">
    <div class="wrapper">

        @if($result->count() > 0) 
        <div class="cart-table">
            <div class="cart-table__box">
                <div class="cart-table__row cart-table__row-head">
                    <div class="cart-table__col">Product</div>
                    <div class="cart-table__col">Price</div>
                    <div class="cart-table__col">Add to cart</div>
                    <div class="cart-table__col">Remove</div>
                </div>

                @foreach($result as  $wishlists)

                @php   $products = DB::table('products')->where('products.products_id', $wishlists->product_id)->join('product_attributes', 'products.products_id', '=', 'product_attributes.products_id')->first(); @endphp
                <?php 
                  $product_image = DB::table('product_images')->where('type',2)->where('products_id' , $products->products_id)->pluck('product_image')->first();  
                  
              ?>
                <div class="cart-table__row">
                    <div class="cart-table__col">
                        <a href="#" class="cart-table__img">
                            <img data-src="{{$product_image}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                        </a>
                        <div class="cart-table__info">
                            <a href="" class="title5">{{$products->product_name}}</a>
                            {{-- <span class="cart-table__info-num">SKU: IN1203</span> --}}
                        </div>
                    </div>
                    <div class="cart-table__col">
                        <span class="cart-table__price">{{$products->price}}</span>
                    </div>                   
                    <div class="cart-table__col">
                            <span class="cart-table__total"><a href="{{url('cart-add/'.$products->products_id.'/'.$products->id.'/'.$wishlists->quantity)}}" class="blog-item__link">buy now <i class="icon-arrow-md"></i></a></span>
                    </div>
                    <div class="cart-table__col">
                        <span class="cart-table__total"><a href="{{url('remove-wishlist/'.$products->products_id)}}" class="blog-item__link text-danger">remove now <i class="icon-arrow-md"></i></a></span>
                    </div>
                </div> 
                @endforeach        
            </div>
        </div>

        @else
        <div class="cart-table__row">
            <div class="cart-table__col"><a href="{{url('/')}}" class="btn btn-solid">Add Items To Wishlist</a></div>
        </div>
    @endif
       
    </div>
    <img class="promo-video__decor js-img" data-src="{{asset('img/promo-video__decor.jpg')}}"
        src="{{asset('img/promo-video__decor.jpg')}}" alt="">
</div>
<!-- WISHLIST EOF   -->
<!-- BEGIN NEW ARRIVALS -->
{{-- <section class="arrivals product-viewed">
    <div class="trending-top">
        <span class="saint-text">Cosmetics</span>
        <h2>You have viewed</h2>
        <p>Nourish your skin with toxin-free cosmetic products. With the offers that you can???t refuse.</p>
    </div>
    <div class="products-items js-products-items">
        <a href="#" class="products-item">
            <div class="products-item__type">
                <span class="products-item__sale">sale</span>
                <span class="products-item__new">new</span>
            </div>
            <div class="products-item__img">
                <img data-src="https://via.placeholder.com/400x570" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                    class="js-img" alt="">
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
                <img data-src="https://via.placeholder.com/400x570" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                    class="js-img" alt="">
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
                <img data-src="https://via.placeholder.com/400x570" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                    class="js-img" alt="">
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
                <img data-src="https://via.placeholder.com/400x570" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                    class="js-img" alt="">
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
                <img data-src="https://via.placeholder.com/400x570" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                    class="js-img" alt="">
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
</section> --}}
<!-- NEW ARRIVALS EOF   -->
<!-- BEGIN INSTA PHOTOS -->
{{-- <div class="insta-photos">
    <a href="#" class="insta-photo">
        <img data-src="https://via.placeholder.com/320" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
            alt="">
        <div class="insta-photo__hover">
            <i class="icon-insta"></i>
        </div>
    </a>
    <a href="#" class="insta-photo">
        <img data-src="https://via.placeholder.com/320" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
            alt="">
        <div class="insta-photo__hover">
            <i class="icon-insta"></i>
        </div>
    </a>
    <a href="#" class="insta-photo">
        <img data-src="https://via.placeholder.com/320" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
            alt="">
        <div class="insta-photo__hover">
            <i class="icon-insta"></i>
        </div>
    </a>
    <a href="#" class="insta-photo">
        <img data-src="https://via.placeholder.com/320" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
            alt="">
        <div class="insta-photo__hover">
            <i class="icon-insta"></i>
        </div>
    </a>
    <a href="#" class="insta-photo">
        <img data-src="https://via.placeholder.com/320" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
            alt="">
        <div class="insta-photo__hover">
            <i class="icon-insta"></i>
        </div>
    </a>
    <a href="#" class="insta-photo">
        <img data-src="https://via.placeholder.com/320" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
            alt="">
        <div class="insta-photo__hover">
            <i class="icon-insta"></i>
        </div>
    </a>
</div> --}}
<!-- INSTA PHOTOS EOF   -->