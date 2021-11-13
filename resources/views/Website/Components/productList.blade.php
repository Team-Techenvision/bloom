<div class="detail-block detail-block_margin" style="background-image: url({{ asset('images/bg_banner.jpg')}})">
    <div class="wrapper">
        <div class="detail-block__content">
            <h1>Shop</h1>
            <ul class="bread-crumbs">
                <li class="bread-crumbs__item">
                    <a href="{{url('/')}}" class="bread-crumbs__link">Home</a>
                </li>
                <li class="bread-crumbs__item">Product List</li>
            </ul>
        </div>
    </div>
</div>
<!-- DETAIL MAIN BLOCK EOF   -->
<!-- BEGIN SHOP -->
<div class="shop">
    <form action="{{url('ProductList')}}/{{$category_id}}" method="post">
        @csrf
        <input type="hidden" name="category_id" value="{{$category_id}}">   
    <div class="wrapper">
        <div class="shop-content">
            <div class="shop-aside">
                {{-- <div class="box-field box-field__search">
                    <input type="search" class="form-control" placeholder="Search">
                    <i class="icon-search"></i>
                </div> --}}
                <div class="shop-aside__item">
                    <span class="shop-aside__item-title">Categories</span>
                    <ul>
                        @foreach ($categories_contain as $item)
                        <?php $P_count = DB::table('products')->where('category_id',$item->id)->where('status',1)->count(); ?>
                            <li><a href="#">{{$item->category_name}}<span>({{$P_count}})</span></a></li>
                        @endforeach
                        {{-- <li><a href="#">SPA <span>(162)</span></a></li>
                        <li><a href="#">Perfume <span>(153)</span></a></li>
                        <li><a href="#">Nails <span>(86)</span></a></li>
                        <li><a href="#">Skin care <span>(48)</span></a></li>
                        <li><a href="#">Hair care <span>(54)</span></a></li> --}}
                    </ul>
                </div>
                <div class="shop-aside__item">
                    <span class="shop-aside__item-title">Price</span>
                    <div class="range-slider">                        
                        <input type="range" name="priceInputName" id="priceInputId" value="100" min="1" max="1000" oninput="priceOutputId.value = priceInputId.value">
                        <output name="priceOutputName" id="priceOutputId">100</output>
                    </div>

                    <div class="">
                        <button class="btn " type="submit"> Filter</button>
                    </div>

                    <style>
                        input, textarea
                        {   
                            appearance: auto;
                        }
                    </style>
                </div>
                {{-- <div class="shop-aside__item">
                    <span class="shop-aside__item-title">You have viewed</span>
                    <a href="#" class="shop-aside__item-product">
                        <div class="shop-aside__item-product-img">
                            <img data-src="https://via.placeholder.com/60x70"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                        </div>
                        <div class="shop-aside__item-product-info">
                            <span class="shop-aside__item-product-title">Detox body Cream</span>
                            <span class="shop-aside__item-product-price">$200.95</span>
                            <ul class="star-rating">
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                            </ul>
                        </div>
                    </a>
                    <a href="#" class="shop-aside__item-product">
                        <div class="shop-aside__item-product-img">
                            <img data-src="https://via.placeholder.com/60x70"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                        </div>
                        <div class="shop-aside__item-product-info">
                            <span class="shop-aside__item-product-title">Detox body Cream</span>
                            <span class="shop-aside__item-product-price">$200.95</span>
                            <ul class="star-rating">
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                            </ul>
                        </div>
                    </a>
                    <a href="#" class="shop-aside__item-product">
                        <div class="shop-aside__item-product-img">
                            <img data-src="https://via.placeholder.com/60x70"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                        </div>
                        <div class="shop-aside__item-product-info">
                            <span class="shop-aside__item-product-title">Detox body Cream</span>
                            <span class="shop-aside__item-product-price">$200.95</span>
                            <ul class="star-rating">
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                            </ul>
                        </div>
                    </a>
                </div> --}}
                <div class="shop-aside__item">
                    <span class="shop-aside__item-title">New Arrival</span>
                    @foreach ($Simillar_products as $item)
                    <a href="{{url('/ProductDetail')}}/{{$item->products_id}}" class="shop-aside__item-product">
                        <div class="shop-aside__item-product-img">
                            <img @if($item->product_image) data-src="{{asset($item->product_image)}}" @else data-src="https://via.placeholder.com/262x370" @endif
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                        </div>
                        <div class="shop-aside__item-product-info">
                            <span class="shop-aside__item-product-title">{{$item->product_name}}</span>
                            <span class="shop-aside__item-product-price">{{$item->price}}</span>
                            {{-- <ul class="star-rating">
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                                <li><i class="icon-star"></i></li>
                            </ul> --}}
                        </div>
                    </a>
                    @endforeach                    
                    
                </div>
            </div>
            <div class="shop-main">
                <div class="shop-main__filter">
                    <div class="shop-main__checkboxes">
                        <label class="checkbox-box">
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                            SALE
                        </label>
                        <label class="checkbox-box">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            NEW
                        </label>
                    </div>
                    <div class="shop-main__select">
                        <select class="styled"  name="price_sort">
                            <option value="asc" @if(isset($price_sort)) {{$price_sort == 'asc'? 'selected':''}} @endif>From cheap to expensive</option>
                            <option value="desc" @if(isset($price_sort)) {{$price_sort == 'desc'? 'selected':''}} @endif>From expensive to cheap</option>
                        </select>
                    </div>
                </div>

                <div class="shop-main__items">

                    @foreach ($Products as $item)

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

                    {{-- <a href="#" class="products-item">
                        <div class="products-item__type">
                            <span class="products-item__new">new</span>
                        </div>
                        <div class="products-item__img">
                            <img data-src="https://via.placeholder.com/262x370" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
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
                            <img data-src="https://via.placeholder.com/262x370" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                            <div class="products-item__hover">
                                <i class="icon-search"></i>
                                <div class="products-item__hover-options">
                                    <i class="icon-heart"></i>
                                    <i class="icon-cart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="products-item__info">
                            <span class="products-item__name">Shampoo for volume with proteins</span>
                            <span class="products-item__cost"><span>$249.95</span> $200.95</span>
                        </div>
                    </a>
                    <a href="#" class="products-item">
                        <div class="products-item__img">
                            <img data-src="https://via.placeholder.com/262x370" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                            <div class="products-item__hover">
                                <i class="icon-search"></i>
                                <div class="products-item__hover-options">
                                    <i class="icon-heart"></i>
                                    <i class="icon-cart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="products-item__info">
                            <span class="products-item__name">Lotion for cleansing and narrowing pores</span>
                            <span class="products-item__cost">$200.95</span>
                        </div>
                    </a>
                    <a href="#" class="products-item">
                        <div class="products-item__type">
                            <span class="products-item__sale">sale</span>
                        </div>
                        <div class="products-item__img">
                            <img data-src="https://via.placeholder.com/262x370" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                            <div class="products-item__hover">
                                <i class="icon-search"></i>
                                <div class="products-item__hover-options">
                                    <i class="icon-heart"></i>
                                    <i class="icon-cart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="products-item__info">
                            <span class="products-item__name">Foundation Beshop</span>
                            <span class="products-item__cost"><span>$249.95</span> $200.95</span>
                        </div>
                    </a>
                    <a href="#" class="products-item">
                        <div class="products-item__img">
                            <img data-src="https://via.placeholder.com/262x370" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                            <div class="products-item__hover">
                                <i class="icon-search"></i>
                                <div class="products-item__hover-options">
                                    <i class="icon-heart"></i>
                                    <i class="icon-cart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="products-item__info">
                            <span class="products-item__name">Toning hair mask "I Tone"</span>
                            <span class="products-item__cost">$200.95</span>
                        </div>
                    </a>
                    <a href="#" class="products-item">
                        <div class="products-item__img">
                            <img data-src="https://via.placeholder.com/262x370" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                            <div class="products-item__hover">
                                <i class="icon-search"></i>
                                <div class="products-item__hover-options">
                                    <i class="icon-heart"></i>
                                    <i class="icon-cart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="products-item__info">
                            <span class="products-item__name">spray balm with oat extract</span>
                            <span class="products-item__cost">$200.95</span>
                        </div>
                    </a>
                    <a href="#" class="products-item">
                        <div class="products-item__type">
                            <span class="products-item__new">new</span>
                        </div>
                        <div class="products-item__img">
                            <img data-src="https://via.placeholder.com/262x370" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                            <div class="products-item__hover">
                                <i class="icon-search"></i>
                                <div class="products-item__hover-options">
                                    <i class="icon-heart"></i>
                                    <i class="icon-cart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="products-item__info">
                            <span class="products-item__name">Hair mask with oat extract</span>
                            <span class="products-item__cost">$200.95</span>
                        </div>
                    </a>
                    <a href="#" class="products-item">
                        <div class="products-item__img">
                            <img data-src="https://via.placeholder.com/262x370" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                            <div class="products-item__hover">
                                <i class="icon-search"></i>
                                <div class="products-item__hover-options">
                                    <i class="icon-heart"></i>
                                    <i class="icon-cart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="products-item__info">
                            <span class="products-item__name">Hydrogel eye patches</span>
                            <span class="products-item__cost">$200.95</span>
                        </div>
                    </a>
                    <a href="#" class="products-item">
                        <div class="products-item__img">
                            <img data-src="https://via.placeholder.com/262x370" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                            <div class="products-item__hover">
                                <i class="icon-search"></i>
                                <div class="products-item__hover-options">
                                    <i class="icon-heart"></i>
                                    <i class="icon-cart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="products-item__info">
                            <span class="products-item__name">Spray balm with oat extract</span>
                            <span class="products-item__cost">$200.95</span>
                        </div>
                    </a> --}}
                </div>
                <ul class="paging-list">

                    {{ $Products->links() }}
                    {{-- <li class="paging-list__item paging-prev">
                        <a href="#" class="paging-list__link">
                            <i class="icon-arrow"></i>
                        </a>
                    </li>
                    <li class="paging-list__item active">
                        <a href="#" class="paging-list__link">1</a>
                    </li>
                    <li class="paging-list__item">
                        <a href="#" class="paging-list__link">2</a>
                    </li>
                    <li class="paging-list__item">
                        <a href="#" class="paging-list__link">3</a>
                    </li>
                    <li class="paging-list__item">
                        <a href="#" class="paging-list__link">4</a>
                    </li>
                    <li class="paging-list__item">
                        <a href="#" class="paging-list__link">5</a>
                    </li>
                    <li class="paging-list__item paging-next">
                        <a href="#" class="paging-list__link">
                            <i class="icon-arrow"></i>
                        </a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
</form>
    <img class="promo-video__decor js-img" data-src="{{asset('img/promo-video__decor.jpg')}}"
    src="{{asset('img/promo-video__decor.jpg')}}" alt="">
</div>
<!-- SHOP EOF   -->
<!-- BEGIN SUBSCRIBE -->
{{-- <div class="subscribe">
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
</div> --}}
<!-- SUBSCRIBE EOF   -->
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
<!-- BEGIN INSTA PHOTOS -->

<style>
    .shop-main__items .products-item__img 
    {
        height:260px;
    }
</style>
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