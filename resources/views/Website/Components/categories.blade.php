 <!-- BEGIN DETAIL MAIN BLOCK -->
 <div class="detail-block detail-block_margin" style="background-image: url({{('images/bg_banner.jpg')}})">
    <div class="wrapper">
        <div class="detail-block__content">
            <h1>Categories</h1>
            <ul class="bread-crumbs">
                <li class="bread-crumbs__item">
                    <a href="#" class="bread-crumbs__link">Home</a>
                </li>
                <li class="bread-crumbs__item">Categories</li>
            </ul>
        </div>
    </div>
</div>
<!-- DETAIL MAIN BLOCK EOF   -->
<!-- BEGIN TOP CATEGORIES -->
<section class="all-categories"> 
    <div class="top-categories__items">

        @if($categories_contain)
            @foreach ($categories_contain as $item)
            <a href="{{url('/ProductList')}}/{{$item->id}}" class="top-categories__item">
                <img data-src="{{asset($item->category_image)}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="" style="object-fit: unset;">
                <div class="top-categories__item-hover">
                    <h5>{{$item->category_name}}</h5>
                    <span>browse products -</span>
                    <i class="icon-arrow-lg"></i>
                </div>
            </a>
            @endforeach
        @endif

        {{-- <a href="#" class="top-categories__item">
            <img data-src="https://via.placeholder.com/620x700" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
            <div class="top-categories__item-hover">
                <h5>SPA</h5>
                <span>browse products -</span>
                <i class="icon-arrow-lg"></i>
            </div>
        </a>
        <a href="#" class="top-categories__item">
            <img data-src="https://via.placeholder.com/620x700" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
            <div class="top-categories__item-hover">
                <h5>Nails</h5>
                <span>browse products -</span>
                <i class="icon-arrow-lg"></i>
            </div>
        </a>
        <a href="#" class="top-categories__item">
            <img data-src="https://via.placeholder.com/620x700" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
            <div class="top-categories__item-hover">
                <h5>Perfum</h5>
                <span>browse products -</span>
                <i class="icon-arrow-lg"></i>
            </div>
        </a>
        <a href="#" class="top-categories__item">
            <img data-src="https://via.placeholder.com/620x700" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
            <div class="top-categories__item-hover">
                <h5>SPA</h5>
                <span>browse products -</span>
                <i class="icon-arrow-lg"></i>
            </div>
        </a>
        <a href="#" class="top-categories__item">
            <img data-src="https://via.placeholder.com/620x700" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
            <div class="top-categories__item-hover">
                <h5>Nails</h5>
                <span>browse products -</span>
                <i class="icon-arrow-lg"></i>
            </div>
        </a>
        <a href="#" class="top-categories__item">
            <img data-src="https://via.placeholder.com/620x700" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img" alt="">
            <div class="top-categories__item-hover">
                <h5>Perfum</h5>
                <span>browse products -</span>
                <i class="icon-arrow-lg"></i>
            </div>
        </a> --}}
    </div>
</section>
<!-- TOP CATEGORIES EOF   -->
<!-- BEGIN INSTA PHOTOS -->
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