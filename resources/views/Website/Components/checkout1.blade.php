  <!-- BEGIN DETAIL MAIN BLOCK -->
  <div class="detail-block detail-block-checkout">
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
<div class="checkout">
    <div class="wrapper">
        <div class="checkout-content">
            <div class="checkout-form">
                <form>
                    <div class="checkout-form__item">
                        <h4>Info about you</h4>
                        <div class="box-field">
                            <input type="text" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="box-field">
                            <input type="text" class="form-control" placeholder="Enter your last name">
                        </div>
                        <div class="box-field__row">
                            <div class="box-field">
                                <input type="tel" class="form-control" placeholder="Enter your phone">
                            </div>
                            <div class="box-field">
                                <input type="email" class="form-control" placeholder="Enter your mail">
                            </div>
                        </div>
                    </div>
                    <div class="checkout-form__item">
                        <h4>Delivery Info</h4>
                        <select class="styled" data-placeholder="Select a country">
                            <option value="" label="0"></option>
                            <option>country 1</option>
                            <option>country 2</option>
                        </select>
                        <div class="box-field__row">
                            <div class="box-field">
                                <input type="text" class="form-control" placeholder="Enter the city">
                            </div>
                            <div class="box-field">
                                <input type="text" class="form-control" placeholder="Enter the address">
                            </div>
                        </div>
                        <div class="box-field__row">
                            <div class="box-field">
                                <input type="text" class="form-control" placeholder="Delivery day">
                            </div>
                            <div class="box-field">
                                <input type="text" class="form-control" placeholder="Delivery time">
                            </div>
                        </div>
                    </div>
                    <div class="checkout-form__item">
                        <h4>Note</h4>
                        <div class="box-field box-field__textarea">
                            <textarea class="form-control" placeholder="Order note"></textarea>
                        </div>
                        <label class="checkbox-box checkbox-box__sm">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            Create an account
                        </label>
                    </div>
                    <div class="checkout-buttons">
                        <a href="#" class="btn btn-grey btn-icon"> <i class="icon-arrow"></i> back</a>
                        <a href="#" class="btn btn-icon btn-next">next <i class="icon-arrow"></i></a>
                    </div>
                </form>
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
                        Discount on promo code
                        <span>00</span>
                    </div>
                    <div class="cart-bottom__total-delivery">
                        {{-- Delivery <span class="cart-bottom__total-delivery-date">(Aug 28,2020 at 11:30)</span> 
                        <span>$30</span> --}}
                    </div>
                    <div class="cart-bottom__total-num">
                        Total:
                        <span><i class="fas fa-rupee-sign"></i>{{$total}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="promo-video__decor js-img" data-src="https://via.placeholder.com/1197x1371/FFFFFF"
        src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="">
</div>
<!-- CHECKOUT EOF   -->
<!-- BEGIN INSTA PHOTOS -->
<div class="insta-photos">
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
</div>
<!-- INSTA PHOTOS EOF   -->