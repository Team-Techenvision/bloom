 <!-- BEGIN DETAIL MAIN BLOCK -->
 <div class="detail-block detail-block_margin" style="background-image: url('Website/img/image/EA3LEEW.jpg');">
    <div class="wrapper">
        <div class="detail-block__content">
            <h1>Blog</h1>
            <ul class="bread-crumbs">
                <li class="bread-crumbs__item">
                    <a href="{{url('/')}}" class="bread-crumbs__link">Home</a>
                </li>
                <li class="bread-crumbs__item">Blog</li>
            </ul>
        </div>
    </div>
</div>
<!-- DETAIL MAIN BLOCK EOF   -->

<!-- BEGIN BLOG -->
<div class="blog">
    <div class="wrapper">
        <div class="blog-items">
             
            @if($blog_contain)
                @foreach ($blog_contain as $item)            

               
                <div class="blog-item">
                    <a href="Javascript:Void(0);" class="blog-item__img">
                        <img data-src="{{asset($item->blog_images)}}" class="js-img" alt="">
                        <span class="blog-item__date">
                            <span>{{ \Carbon\Carbon::parse($item->blog_date)->format('M')}}</span>
                            {{ \Carbon\Carbon::parse($item->blog_date)->format('d')}}
                        </span>
                    </a>
                    <a href="{{url('/blogDetail')}}/{{$item->id}}" class="blog-item__title">{{$item->blog_title}}</a>
                    @php
                    $category_name =  DB::table('category')->where('id',$item->category_id)->pluck('category_name')->first();
                    @endphp
                    <h6>{{$category_name}}</h6>
                    <p>{!! \Illuminate\Support\Str::limit($item->blog_content, 150) !!}</p>
                    <a href="{{url('/blogDetail')}}/{{$item->id}}" class="blog-item__link">View More<i class="icon-arrow-md"></i></a>
                </div>
                    
                @endforeach
            @endif
           
        </div>
        <ul class="paging-list mb-5">

            {{ $blog_contain->links() }}
            {{-- <li class="paging-list__item paging-prev">
                <a href="#" class="paging-list__link">
                    <i class="icon-arrow"></i>
                </a>
            </li>
            <li class="paging-list__item active">
                <a href="#" class="paging-list__link">1</a>
            </li>
            <li class="paging-list__item">
                <a href="#" class="paging-list__link">2</a>
            </li>
            <li class="paging-list__item">
                <a href="#" class="paging-list__link">3</a>
            </li>
            <li class="paging-list__item">
                <a href="#" class="paging-list__link">4</a>
            </li>
            <li class="paging-list__item">
                <a href="#" class="paging-list__link">5</a>
            </li>
            <li class="paging-list__item paging-next">
                <a href="#" class="paging-list__link">
                    <i class="icon-arrow"></i>
                </a>
            </li> --}}
        </ul>
    </div>
    <img class="promo-video__decor js-img" data-src="{{asset('img/promo-video__decor.jpg')}}"
    src="{{asset('img/promo-video__decor.jpg')}}" alt="">
</div>
<!-- BLOG EOF   -->
<!-- BEGIN SUBSCRIBE -->
{{-- <div class="subscribe mb-5">
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
</div> --}}
<!-- SUBSCRIBE EOF   -->
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