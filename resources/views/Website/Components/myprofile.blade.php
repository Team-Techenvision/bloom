 <!-- BEGIN DETAIL MAIN BLOCK -->
 <div class="detail-block detail-block_margin" style="background-image: url({{('images/bg_banner.jpg')}})">
    <div class="wrapper">
        <div class="detail-block__content">
            <h1>My Profile</h1>
            <ul class="bread-crumbs">
                <li class="bread-crumbs__item">
                    <a href="#" class="bread-crumbs__link">Home</a>
                </li>
                <li class="bread-crumbs__item">My Profile</li>
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
                    <h5>{{$user->name}}</h5>
                   
                    <img data-src="img/subscribe-img-decor-sm.png" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                </div>
                <div class="profile-aside__viewed" style="text-align: center;">
                    <h6 class="ml-3">Profile Picture</h6>                         
                    <div class="testimonials-author">
                        <img data-src="{{asset($user->profile_pic)}}" src="{{asset($user->profile_pic)}}" class="js-img" alt="">
                    </div>
                </div>
            </div>

                <div class="profile-main">
                    <div class="tab-wrap">
                        <ul class="nav-tab-list tabs">
                            <li class="active">
                                <a href="#profile-tab_1">My info</a>
                            </li>
                        </ul>
                        <div class="box-tab-cont">
                            <div class="tab-cont" id="profile-tab_1">

                                <div class="login registration" style="padding-top: 10px;">
                                    <div class="">                                
                                <form class="address-form" action="{{url('user-profile-submit')}}" method="post" name="add_profile" enctype="multipart/form-data">
                                    @csrf                                  
                                    <div class="box-field__row">
                                        <div class="box-field">
                                            <input type="text" name="name" class="form-control" placeholder="Enter your name" value="{{$user->name}}" required>
                                        </div>
                                        <div class="box-field">
                                            <input type="number" name="phone"  class="form-control" value="{{$user->phone}}" placeholder="Enter Mobile No." required>
                                        </div>
                                    </div>

                                    <div class="box-field__row">
                                        <div class="box-field">
                                            <input type="email" name="email" class="form-control" placeholder="Enter your email" value="{{$user->email}}"  readonly>
                                        </div>
                                        <div class="box-field">
                                            <input type="file"  style="padding: 10px;" name="profile_pic" class="form-control">
                                        </div>
                                    </div>

                                    <button class="btn" type="submit">Submit</button>

                                </form>
                                    </div>
                                </div>

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
                        <input type="email" class="form-control" placeholder="Enter your email">
                    </div>
                    <button type="submit" class="btn">subscribe</button>
                </div>
            </form>
        </div>
    </div>
</div>
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