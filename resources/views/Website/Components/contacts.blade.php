 <!-- BEGIN DETAIL MAIN BLOCK -->
 <div class="detail-block" style="background-image: url('Website/img/image/spa-soap-composition-with-orchid-3ZF6FTM.jpg')">
    <div class="wrapper">
        <div class="detail-block__content" >
            <h1>Contact</h1>
            <ul class="bread-crumbs">
                <li class="bread-crumbs__item">
                    <a href="#" class="bread-crumbs__link">Home</a>
                </li>
                <li class="bread-crumbs__item">Contact</li>
            </ul>
            @php
                $basic_info = DB::table('basic_info')->where('status', 1)->first();
            @endphp
            <div class="detail-block__items">
                <div class="detail-block__item">
                    <div class="detail-block__item-icon">
                        <img data-src="img/main-text-decor.svg"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                        <i class="icon-map-pin-big"></i>
                    </div>
                    <div class="detail-block__item-info">
                        @if($basic_info->address) {{$basic_info->address}} @endif
                    </div>
                </div>
                <div class="detail-block__item">
                    <div class="detail-block__item-icon">
                        <img data-src="img/main-text-decor.svg"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                        <i class="icon-phone"></i>
                    </div>
                    <div class="detail-block__item-info">
                        @if($basic_info->phone1)<a href="tel:{{$basic_info->phone1}}"> {{$basic_info->phone1}} </a>@endif<br>
                        @if($basic_info->email) {{$basic_info->email}} @endif
                    </div>
                </div>
                <div class="detail-block__item">
                    <div class="detail-block__item-icon">
                        <img data-src="img/main-text-decor.svg"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
                        <i class="icon-2"></i>
                    </div>
                    <div class="detail-block__item-info">
                        @if($basic_info->timing) {{$basic_info->timing}} @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- DETAIL MAIN BLOCK EOF   -->
<!-- BEGIN CONTACTS INFO -->
<div class="contacts-info">
    <div class="wrapper">
        <div class="contacts-info__content">
            <div class="contacts-info__text">
                <h4>We take care of you</h4>
                <p>
                    Email us if you have any questions, we will be sure to contact you and find a solution. Also,
                    our managers will help you choose the product that suits you best, at the best price. From year
                    to year, the Bloom network develops and improves, taking into account all consumer needs and
                    market trends. But for us, the concern remains that when coming to the Bloom store, customers
                    do not have questions about the convenience and comfort of shopping, product quality and
                    the level of professionalism of sales consultants.
                </p>
            </div>
            <div class="contacts-info__social">
                <span>Find us here:</span>
                @php
                $social_media = DB::table('social_media')->where('status', 1)->get();
            @endphp
                <ul>
                    @foreach ($social_media as $item)
                    @if($item->social_media_name =='facebook' )<li><a href="{{$item->link}}"><i class="icon-facebook"></i></a></li>@endif
                    @if($item->social_media_name == 'twitter')<li><a href="{{$item->link}}"><i class="icon-twitter"></i></a></li>@endif
                    @if($item->social_media_name == 'instagram')<li><a href="{{$item->link}}"><i class="icon-insta"></i></a></li>@endif
                    @if($item->social_media_name ==  'linkedin')<li><a href="{{$item->link}}"><i class="icon-in"></i></a></li>@endif
                    @if($item->social_media_name ==  'youtube')<li><a href="{{$item->link}}"><i class="icon-youtube"></i></a></li>@endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- CONTACTS INFO EOF   -->
<!-- BEGIN LOGOS -->
<div class="main-logos main-logos_contacts">
    <img data-src="img/main-logo1.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
    class="js-img" alt="">
    <img data-src="img/main-logo2.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
    class="js-img" alt="">
    <img data-src="img/main-logo3.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
    class="js-img" alt="">
    <img data-src="img/main-logo4.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
    class="js-img" alt="">
    <img data-src="img/main-logo5.svg" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
    class="js-img" alt="">
</div>
<!-- LOGOS EOF   -->
<!-- BEGIN DISCOUNT -->
<div class="discount discount-contacts js-img" data-src="{{asset('Website/img/image/spa-soap-composition-with-orchid-3ZF6FTM.jpg')}}" style="background-attachment: fixed;">
    <div class="wrapper" >
        <div class="discount-info">
            <span class="saint-text">write to us</span>
            <span class="main-text">leave a message</span>
            <p>
                Write to us if you have any questions, we will definitely contact you and find a solution.
            </p>
            <form>
                <div class="box-field">
                    <input type="text" class="form-control" placeholder="Enter your name">
                </div>
                <div class="box-field">
                    <input type="email" class="form-control" placeholder="Enter your email">
                </div>
                <div class="box-field box-field__textarea">
                    <textarea class="form-control" placeholder="Enter your message"></textarea>
                </div>
                <button type="submit" class="btn btn-info">send</button>
            </form>
        </div>
    </div>
</div>
<!-- DISCOUNT EOF   -->
<!-- BEGIN CONTACTS MAP -->
<div class="contacts-map mb-5">
    <div id="map1">
        <iframe src="@if($basic_info->map) {{$basic_info->map}} @endif" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d343.4864031675898!2d77.58805909564494!3d13.092529034859924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae185cddbddf4d%3A0x92c6f685d0f84a8a!2sPhase%2013th!5e0!3m2!1sen!2sin!4v1635505785728!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
    </div>
</div>
<!-- CONTACTS MAP EOF   -->
<!-- BEGIN INSTA PHOTOS -->
<!--<div class="insta-photos insta-photos_contacts">-->
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
 {{-- ====================================================================== --}}
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
<!-- INSTA PHOTOS EOF   -->