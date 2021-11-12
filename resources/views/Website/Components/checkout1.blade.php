  <!-- BEGIN DETAIL MAIN BLOCK -->
  <div class="detail-block detail-block-checkout" style="background-image: url({{ asset('images/bg_banner.jpg')}})">
    <div class="wrapper">
        <div class="detail-block__content">
            <h1>Checkout</h1>
            <ul class="bread-crumbs">
                <li class="bread-crumbs__item">
                    <a href="#" class="bread-crumbs__link">Home</a>
                </li>
                <li class="bread-crumbs__item">
                    <a href="#" class="bread-crumbs__link">Shop</a>
                </li>
                <li class="bread-crumbs__item">Checkout</li>
            </ul>
            <div class="detail-block__items">
                <div class="detail-block__item">
                    <div class="detail-block__item-icon">
                        <img data-src="{{asset('Website/img/main-text-decor.svg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                        <i class="icon-step1"></i>
                    </div>
                    <div class="detail-block__item-info">
                        <h6>Step 1</h6>
                        Order details
                    </div>
                </div>
                <div class="detail-block__item detail-block__item-inactive">
                    <div class="detail-block__item-icon">
                        <img data-src="{{asset('Website/img/main-text-decor2.svg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                        <i class="icon-step2"></i>
                    </div>
                    <div class="detail-block__item-info">
                        <h6>Step 2</h6>
                        Payment method
                    </div>
                </div>
                <div class="detail-block__item detail-block__item-inactive">
                    <div class="detail-block__item-icon">
                        <img data-src="{{asset('Website/img/main-text-decor2.svg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                        <i class="icon-step3"></i>
                    </div>
                    <div class="detail-block__item-info">
                        <h6>Step 3</h6>
                        Finish!
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- DETAIL MAIN BLOCK EOF   -->
<!-- BEGIN CHECKOUT -->
<form action="{{url('checkout-submit')}}" method="POST">
    @csrf
<div class="checkout">
    <div class="wrapper">
        <div class="checkout-content">
            <div class="checkout-form">
                         <div class="box-field__row">
                             
                            @foreach ($useraddress as $item)
                            {{-- <div class="box-field m-5 p-5"> 
                                <h5 class="text-danger ">Please Add Address To Checkout</h5>
                                <div class="cart-table__col"><a href="{{url('/My-Address')}}" class="btn btn-solid">Add Address</a></div>
                             </div> --}}
                            
                            <div class="box-field"> 
                                <div class="exsting_address">                                    
                                    <label class="radio-box"> {{$item->name}}
                                        <input type="radio" checked="checked" name="address_id" value="{{$item->id}}">
                                        <span class="checkmark"></span>
                                        
                                    </label>
                                    <ul style="line-height: 1.5;">                                       
                                        {{-- <li>{{$item->address_type}}</li> --}}                                        
                                        {{-- <li>{{$item->name}}</li> --}}
                                        <li>{{$item->address}}</li>
                                        <li>{{$item->city}},</li>
                                        <li>{{$item->state}},{{$item->country}},{{$item->pin_code}}</li>
                                        <li><a href="{{url('user-address-edit')}}/{{$item->id}}">Edit</a>&nbsp; <a href="{{url('user-address-delete')}}/{{$item->id}}">Delete</a></li>
                                       
                                    </ul>
                                </div>
                            </div>      
                         
                            @endforeach
                        </div>
            </div>
            <div class="checkout-info">
                <div class="checkout-order">
                    <h5>Your Order</h5>
                    @php                                                 
                        $total=0; 
                        $total_amount=0;
                        $shipping_charges = 0;
                        $copoun_amount = 0;
                    @endphp
                    @foreach ($result as $item)
                   
                        @php
                            $total += ($item->price) * ($item->quantity);
                            $subtotal = ($item->price) * ($item->quantity);

                            $shipping = DB::table('shipping_charges')->where('min','<=',  $total)->where('max','>=',$total)->pluck('ship_charges')->first();
                            $final_total = $total + $shipping;
                        @endphp 

                        @php
                             $product_image = DB::table('product_images')->where('products_id' , $item->products_id)->where('type', 2)->pluck('product_image')->first();
                        @endphp

                    

                    <div class="checkout-order__item">
                        <a href="{{url('ProductDetail/'.$item->products_id)}}" class="checkout-order__item-img">
                            <img data-src="{{asset($product_image)}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                        </a>
                        <div class="checkout-order__item-info">
                            <a class="title6" href="{{url('ProductDetail/'.$item->products_id)}}">{{$item->product_name}} <span>x{{$item->quantity}}</span></a>
                            <span class="checkout-order__item-price">{{$item->price}}</span>
                            <span class="checkout-order__item-num">SKU: {{$item->product_code}}</span>
                        </div>
                    </div>

                    @endforeach
                </div>
                <div class="cart-bottom__total">
                    <div class="cart-bottom__total-goods">
                      Total Amount
                        <span><i class="fas fa-rupee-sign"></i>{{$total}}</span>
                    </div>
                  
                    <div class="cart-bottom__total-promo">
                       Shipping Charges
                        <span>{{$shipping}}</span>
                    </div>
                    <div class="cart-bottom__total-delivery">
                        {{-- Delivery <span class="cart-bottom__total-delivery-date">(Aug 28,2020 at 11:30)</span> 
                        <span>$30</span> --}}
                    </div>
                    <div class="cart-bottom__total-num">
                        Total:
                        <span><i class="fas fa-rupee-sign"></i>{{$final_total}}</span>
                    </div>

                    <input type="hidden" name="total_amount" value="{{$final_total}}">
                    <input type="hidden" name="payment_mode" value="1">

                    <button type="submit" class="btn" style="margin-top: 50px;">Place Order</button>
                </div>
            </div>
        </div>
    </div>
    <img class="promo-video__decor js-img" data-src="{{asset('img/promo-video__decor.jpg')}}"
    src="{{asset('img/promo-video__decor.jpg')}}" alt="">
</div>
</form>
<!-- CHECKOUT EOF   -->
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