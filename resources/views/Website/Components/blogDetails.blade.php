 <!-- BEGIN DETAIL MAIN BLOCK -->
 <div class="detail-block detail-block_margin" style="background-image: url({{ asset('images/bg_banner.jpg')}})">
    <div class="wrapper">
        <div class="detail-block__content">
            <h1>Blog</h1>
            <ul class="bread-crumbs">
                <li class="bread-crumbs__item">
                    <a href="{{url('/')}}" class="bread-crumbs__link">Home</a>
                </li>
                <li class="bread-crumbs__item">
                    <a href="{{url('/blog')}}" class="bread-crumbs__link">Blog</a>
                </li>
                <li class="bread-crumbs__item">{{$blog->blog_title}}</li>
            </ul>
        </div>
    </div>
</div>
<!-- DETAIL MAIN BLOCK EOF   -->
<!-- BEGIN POST -->
<div class="post">
    <div class="wrapper">
        <div class="post-top">
            <h2>{{$blog->blog_title}}</h2>
            {{-- <p>What is actually on your table?</p> --}}
            <img data-src="{{asset($blog->blog_images)}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" class="js-img"
                alt="blog-image">
            <ul class="post-top__info">
                @php
                     $category_name =  DB::table('category')->where('id',$blog->category_id)->pluck('category_name')->first();
                @endphp
                <li class="post-top__date"><i class="icon-date"></i>{{ \Carbon\Carbon::parse($blog->blog_date)->format('d M Y')}}</li>
                <li class="post-top__user"><i class="icon-user2"></i><a href="#">by Admin</a></li>
                 <li class="post-top__watch"><i class="icon-comment"></i>{{ $category_name }}</li>
                {{--<li class="post-top__comment"><i class="icon-comment"></i>35</li> --}}
            </ul>
        </div>
        <div class="post-content">
            {!!$blog->blog_content!!}
        </div>
        
        
    </div>
    <img class="promo-video__decor js-img" data-src="{{asset('img/promo-video__decor.jpg')}}"
        src="{{asset('img/promo-video__decor.jpg')}}" alt="">
</div>
<!-- POST EOF   -->
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