 <!-- BEGIN DETAIL MAIN BLOCK -->
 <div class="detail-block detail-block_margin" style="background-image: url({{('images/bg_banner.jpg')}})">
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
                <h3>Add Address</h3>
                {{-- <ul class="login-form__social">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-insta"></i></a></li>
                    <li><a href="#"><i class="icon-google"></i></a></li>
                </ul> --}}
                <div class="box-field__row">
                    <div class="box-field">
                        <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                    </div>
                    <div class="box-field">
                        <input type="number" name="phone"  class="form-control" placeholder="Enter Mobile No." required>
                    </div>
                </div>
                <div class="box-field__row">
                    <div class="box-field">
                        <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                    </div>
                </div>
                <div class="box-field__row">
                    <div class="box-field" style="width: calc(100% - 10px);">
                       <textarea class="form-control" style="padding: 5px 5px!important;" name="address" id="" cols="80" rows="10" placeholder="Enter Address"></textarea>
                    </div>
                </div>

                <div class="box-field__row">
                    <div class="box-field">                                                                                    
                        <select class="form-control" name="state">    
                            <option value="">Select State</option>                                                
                            @foreach($state_list as $r)                                                                                                      
                                <option value="{{$r->state}}">{{$r->state}}</option>                                                                                                      
                            @endforeach                                                          
                        </select>  
                    </div>
                    <div class="box-field">
                        <input type="text" name="country"  class="form-control" placeholder="Enter Country No." value="India" readonly>
                    </div>
                </div>  
                
                <div class="box-field__row">
                    <div class="box-field">                                                                                    
                        <input type="text" class="form-control"  placeholder="Enter City" name="city">
                    </div>
                    <div class="box-field">
                        <input type="number" class="form-control"  placeholder="Pincode" min="100000" max="999999" name="pin_code" required>
                    </div>
                </div>  

                <button class="btn" type="submit">Submit</button>

            </div>
            </form>

            <div class="login-form mb-5">
                <h3>Saved Address</h3>
            <div class="box-field__row">
                @foreach ($useraddress as $item)
                <div class="box-field"> 
                    <div class="exsting_address">
                        <ul style="line-height: 1.5;">
                           
                            {{-- <li>{{$item->address_type}}</li> --}}
                            <li>{{$item->name}}</li>
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
            
          

        </div>
    </div>
   <img class="promo-video__decor js-img" data-src="{{asset('img/promo-video__decor.jpg')}}"
        src="{{asset('img/promo-video__decor.jpg')}}" alt="">
</div>
<!-- REGISTRATION EOF   -->
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