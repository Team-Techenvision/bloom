 <!-- BEGIN DETAIL MAIN BLOCK -->
 <div class="detail-block detail-block_margin" style="background-image: url({{ asset('images/bg_banner.jpg')}})">
    <div class="wrapper">
        <div class="detail-block__content">
            <h1>Cart</h1>
            <ul class="bread-crumbs">
                <li class="bread-crumbs__item">
                    <a href="{{url('/')}}" class="bread-crumbs__link">Home</a>
                </li>
                <li class="bread-crumbs__item">Cart</li>
            </ul>
        </div>
    </div>
</div>
<!-- DETAIL MAIN BLOCK EOF   -->
<!-- BEGIN CART -->
@if(is_array($result))
<div class="cart">
    <div class="wrapper">
        <div class="cart-table">
            <div class="cart-table__box">
                <div class="cart-table__row cart-table__row-head">
                    <div class="cart-table__col">Product</div>
                    <div class="cart-table__col">Price</div>
                    <div class="cart-table__col">Quantity</div>
                    <div class="cart-table__col">Total</div>
                    <div class="cart-table__col">Delete</div>
                </div>

                @php                                                 
                    $total=0; 
                @endphp

                @foreach ($result as $item)
                        
                    @php
                        $total += ($item->price) * ($item->quantity);
                        $subtotal = ($item->price) * ($item->quantity);
                    @endphp 
                      @php
                            $product_image = DB::table('product_images')->where('products_id' , $item->products_id)->where('type', 2)->pluck('product_image')->first();
                        @endphp
                <div class="cart-table__row">
                   
                    <div class="cart-table__col">
                        <a href="{{url('ProductDetail/'.$item->products_id)}}" class="cart-table__img">
                            <img data-src="{{$product_image}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                        </a>
                        <div class="cart-table__info">
                            <a href="{{url('ProductDetail/'.$item->products_id)}}" class="title5">{{$item->product_name}}</a>
                            <span class="cart-table__info-stock">in stock</span>
                            <span class="cart-table__info-num">SKU: {{$item->product_code}}</span>
                        </div>
                    </div>  
                    <div class="cart-table__col">
                        <span class="cart-table__price"> <i class="fas fa-rupee-sign"></i> {{$item->price}}</span>
                    </div>                  
                    <div class="cart-table__col">
                        <div class="cart-table__quantity">
                            <div class="counter-box">
                                <span class="counter-link counter-link__prev" onclick="counterUpdate(2,{{$item->attribute_id}})"><i class="icon-arrow"></i></span>
                                <input type="text" class="counter-input" readonly  value="{{$item->quantity}}">
                                <span class="counter-link counter-link__next" onclick="counterUpdate(1,{{$item->attribute_id}})"><i class="icon-arrow"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="cart-table__col">
                        <span class="cart-table__total"> <i class="fas fa-rupee-sign"></i> {{$subtotal}}</span>
                    </div>
                    <div class="cart-table__col">
                        <a href="javascript:void(0)" onclick="removeProduct({{$item->attribute_id}})">
                            <span class="cart-table__price">  <i class="far fa-trash-alt"></i> </span>
                        </a>
                    </div>    
                </div>

                @endforeach
              
            </div>
        </div>
        <div class="cart-bottom">
            <div class="cart-bottom__promo">
                {{-- <form class="cart-bottom__promo-form">
                    <div class="box-field__row">
                        <div class="box-field">
                            <input type="text" class="form-control" placeholder="Enter promo code">
                        </div>
                        <button type="submit" class="btn btn-grey">apply code</button>
                    </div>
                </form>
                <h6>How to get a promo code?</h6>
                <p>
                    Follow our news on the website, as well as subscribe to our social networks. So you will not only be able to receive up-to-date codes,
                    but also learn about new products and promotional items.
                </p> --}}
                {{-- <div class="contacts-info__social">
                    <span>Find us here:</span>
                    <ul>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-insta"></i></a></li>
                        <li><a href="#"><i class="icon-in"></i></a></li>
                    </ul>
                </div> --}}
            </div>
            <div class="cart-bottom__total">
                <div class="cart-bottom__total-goods">
                    Sub Total
                    <span><i class="fas fa-rupee-sign"></i> {{$total}}</span>
                </div>
                <div class="cart-bottom__total-promo">
                    Discount 
                    <span>00</span>
                </div>
                <div class="cart-bottom__total-num">
                    total:
                    <span><i class="fas fa-rupee-sign"></i>{{$total}}</span>
                </div>
                <a href="{{url('checkout')}}" class="btn">Checkout</a>
            </div>
        </div>
    </div>
    <img class="promo-video__decor js-img" data-src="{{asset('img/promo-video__decor.jpg')}}"
    src="{{asset('img/promo-video__decor.jpg')}}" alt="">
</div>

@else

<div class="cart-table__row">
    <div class="cart-table__col"><a href="{{url('/')}}" class="btn btn-solid">continue shopping</a></div>
</div>

@endif
<!-- CART EOF   -->
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
