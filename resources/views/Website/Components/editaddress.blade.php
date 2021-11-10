 <!-- BEGIN DETAIL MAIN BLOCK -->
 <div class="detail-block detail-block_margin">
    <div class="wrapper">
        <div class="detail-block__content">
            <h1>My Address</h1>
            <ul class="bread-crumbs">
                <li class="bread-crumbs__item">
                    <a href="#" class="bread-crumbs__link">Home</a>
                </li>
                <li class="bread-crumbs__item">My Address</li>
            </ul>
        </div>
    </div>
</div>
<!-- DETAIL MAIN BLOCK EOF   -->
<!-- BEGIN REGISTRATION -->
<div class="login registration">
    <div class="wrapper">
        <div class="login-form js-img" data-src="img/registration-form__bg.png">
            <form class="address-form" action="{{url('user-address-submit')}}" method="post" name="add_address" enctype="multipart/form">
                @csrf

                <input type="hidden" name="address_id" value="{{$useraddress->id}}">
                <h3>Update Address</h3>
                {{-- <ul class="login-form__social">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-insta"></i></a></li>
                    <li><a href="#"><i class="icon-google"></i></a></li>
                </ul> --}}
                <div class="box-field__row">
                    <div class="box-field">
                        <input type="text" name="name" class="form-control" placeholder="Enter your name" value="{{$useraddress->name}}" required>
                    </div>
                    <div class="box-field">
                        <input type="number" name="phone"  class="form-control" placeholder="Enter Mobile No." value="{{$useraddress->phone}}" required>
                    </div>
                </div>
                <div class="box-field__row">
                    <div class="box-field">
                        <input type="email" name="email" class="form-control" placeholder="Enter your email" value="{{$useraddress->email}}" required>
                    </div>
                </div>
                <div class="box-field__row">
                    <div class="box-field" style="width: calc(100% - 10px);">
                       <textarea class="form-control" style="padding: 5px 5px!important;" name="address" id="" cols="80" rows="10" placeholder="Enter Address">{{$useraddress->address}}</textarea>
                    </div>
                </div>

                <div class="box-field__row">
                    <div class="box-field">                                                                                    
                        <select class="form-control" name="state">    
                            <option value="">Select State</option>                                                
                            @foreach($state_list as $r)                                                                                                      
                                <option value="{{$r->state}}" @if($r->state == $useraddress->state)selected @endif>{{$r->state}}</option>                                                                                                      
                            @endforeach                                                          
                        </select>  
                    </div>
                    <div class="box-field">
                        <input type="text" name="country"  class="form-control" placeholder="Enter Country No." value="India" readonly>
                    </div>
                </div>  
                
                <div class="box-field__row">
                    <div class="box-field">                                                                                    
                        <input type="text" class="form-control"  placeholder="Enter City" name="city" value="{{$useraddress->city}}">
                    </div>
                    <div class="box-field">
                        <input type="number" class="form-control"  placeholder="Pincode" min="100000" max="999999" value="{{$useraddress->pin_code}}" name="pin_code" required>
                    </div>
                </div>  

                <button class="btn" type="submit">Update</button>

            </div>
            </form>
        </div>
    </div>
    <img class="promo-video__decor js-img" data-src="https://via.placeholder.com/1197x1371/FFFFFF"
        src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="">
</div>
<!-- REGISTRATION EOF   -->
<!-- BEGIN SUBSCRIBE -->
<div class="subscribe">
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
</div>
<!-- SUBSCRIBE EOF   -->
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