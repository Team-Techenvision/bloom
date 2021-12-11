 <!-- BEGIN DETAIL MAIN BLOCK -->
 <div class="detail-block detail-block_margin" style="background-image: url({{('images/bg_banner.jpg')}})">
    <div class="wrapper">
        <div class="detail-block__content">
            <h1>My Order</h1>
            <ul class="bread-crumbs">
                <li class="bread-crumbs__item">
                    <a href="#" class="bread-crumbs__link">Home</a>
                </li>
                <li class="bread-crumbs__item">My Order</li>
            </ul>
        </div>
    </div>
</div>
<!-- DETAIL MAIN BLOCK EOF   -->

<!-- BEGIN PROFILE -->
<div class="profile">
    <div class="wrapper">
        <div class="profile-content">
            <div class="profile-aside">
                <div class="profile-aside__subscribe">
                    <h5></h5>
                   
                    <img data-src="img/subscribe-img-decor-sm.png" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                </div>

                <div class="profile-aside__viewed">
                    <h5>Menu</h5>
                    <div class="profile-aside__viewed-item">                       
                        <div class="profile-aside__viewed-item-info">
                            <a href="{{url('My-Profile')}}" class="profile-aside__viewed-item-title">My Profile</a>                           
                        </div>
                    </div>
                    <div class="profile-aside__viewed-item">                       
                        <div class="profile-aside__viewed-item-info">
                            <a href="{{url('My-Address')}}" class="profile-aside__viewed-item-title">My Address</a>                           
                        </div>
                    </div>
                    <div class="profile-aside__viewed-item">                       
                        <div class="profile-aside__viewed-item-info">
                            <a href="{{url('My-Order')}}" class="profile-aside__viewed-item-title">My Order</a>                           
                        </div>
                    </div>
                  
                </div>
               
            </div>

                <div class="profile-main">
                    <div class="tab-wrap">
                        <ul class="nav-tab-list tabs">
                            <li class="active">
                                <a href="#profile-tab_1">My Orders</a>
                            </li>
                        </ul>

                        <div class="box-tab-cont">
                            <div class="tab-cont" id="profile-tab_1">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ORDER ID</th>
                                            <th>AMOUNT</th>
                                            <th>PAYMENT STATUS</th>
                                            <th>SHIPPING</th>
                                            <th>ACTION</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order as $item)
                                        <tr>
                                            <td>{{$item->order_id}}</td>
                                            <td>{{$item->amount}}</td>
                                            <td>{{$item->payment_status}}</td>
                                            <td>{{$item->shipping_charge}}</td>
                                            <td>
                                                {{-- <a href="{{url('download-user-invoice/'.$item->order_id)}}" data-toggle="tooltip" title="download-invoice"><i class="fa fa-download pr-3" aria-hidden="true"></i></a> --}}
                                                <a href="{{url('user-order-detail/'.$item->order_id)}}" data-toggle="tooltip" title="View Order Details "><i class="fa fa-eye" aria-hidden="true"></i></a>    
                                            </td>                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
    <img class="promo-video__decor js-img" data-src="{{asset('img/promo-video__decor.jpg')}}"
    src="{{asset('img/promo-video__decor.jpg')}}" alt="">
</div>
<!-- PROFILE EOF   -->
<!-- BEGIN SUBSCRIBE -->
{{-- <div class="subscribe">
    <div class="wrapper">
        <div class="subscribe-form">
            <div class="subscribe-form__img">
                <img data-src="https://via.placeholder.com/460x302" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                    class="js-img" alt="">
            </div>
            <form>
                <h3>Stay in touch</h3>
                <p>Nourish your skin with toxin-free cosmetic roducts.</p>
                <div class="box-field__row">
                    <div class="box-field">
                        <input type="email" class="form-control" placeholder="Enter your email">
                    </div>
                    <button type="submit" class="btn">subscribe</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}
<!-- SUBSCRIBE EOF   -->
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