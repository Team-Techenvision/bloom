 <!-- BEGIN DETAIL MAIN BLOCK -->
 <div class="detail-block detail-block_margin" style="background-image: url('Website/img/image/EA3LEEW.jpg');">
    <div class="wrapper">
        <div class="detail-block__content">
            <h1>Blog</h1>
            <ul class="bread-crumbs">
                <li class="bread-crumbs__item">
                    <a href="index.html" class="bread-crumbs__link">Home</a>
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
                            <span> </span>
                        </span>
                    </a>
                    {{-- <a href="Javascript:Void(0);" class="blog-item__title">Limited promo</a> --}}
                    <h4>{{$item->blog_title}}</h4>
                    <p>{{$item->blog_content}}</p>
                    <a href="Javascript:Void(0);" class="blog-item__link">Get Discount <i class="icon-arrow-md"></i></a>
                </div>
                    
                @endforeach
            @endif
            {{-- ================================================================= --}}

            {{-- <div class="blog-item">
                <a href="Javascript:Void(0);" class="blog-item__img">
                    <img data-src="{{asset('Website/img/image/female-hands-with-soap-foam-KVKDKGZ.jpg')}}" class="js-img" alt="">
                    <span class="blog-item__date">
                        <span>Aug</span> 10
                    </span>
                </a>
                <a href="Javascript:Void(0);" class="blog-item__title">Limited promo</a>
                <h4>Get the + 75% Discount</h4>
                <p>Spesial price during our company anniversary</p>
                <a href="Javascript:Void(0);" class="blog-item__link">Get Discount <i class="icon-arrow-md"></i></a>
            </div> --}}

            {{-- <div class="blog-item">
                <a href="Javascript:Void(0);" class="blog-item__img">
                    <img data-src="{{asset('Website/img/image/Image-3KGQSJN-1024x683-1-300x200.jpg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                        class="js-img" alt="">
                    <span class="blog-item__date">
                        <span>Aug</span> 08
                    </span>
                </a>
                <a href="Javascript:Void(0);" class="blog-item__title">Features of cosmetics with honey</a>
                <p>Easy Ways To Sample Minimalist Living Before Committing.</p>
                <a href="Javascript:Void(0);" class="blog-item__link">Read more <i class="icon-arrow-md"></i></a>
            </div> --}}
            {{-- <div class="blog-item">
                <a href="Javascript:Void(0);" class="blog-item__img">
                    <img data-src="{{asset('Website/img/image/luchiana-1959487418-460x259.jpg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                        class="js-img" alt="">
                    <span class="blog-item__date">
                        <span>Jul</span> 15
                    </span>
                </a>
                <a href="Javascript:Void(0);" class="blog-item__title">Perfumes, perfumed or eau de toilette?</a>
                <p>New Trends in 2021	</p>
                <a href="Javascript:Void(0);" class="blog-item__link">Read more <i class="icon-arrow-md"></i></a>
            </div> --}}
            {{-- <div class="blog-item">
                <a href="Javascript:Void(0);" class="blog-item__img">
                    <img data-src="{{asset('Website/img/image/Image.jpg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                        class="js-img" alt="">
                    <span class="blog-item__date">
                        <span>Jun</span> 18
                    </span>
                </a>
                <a href="Javascript:Void(0);" class="blog-item__title">Which of the lines will suit you?</a>
                <p>Everything You Need To Know About Essential Oils.</p>
                <a href="Javascript:Void(0);" class="blog-item__link">Read more <i class="icon-arrow-md"></i></a>
            </div> --}}
            {{-- <div class="blog-item">
                <a href="Javascript:Void(0);" class="blog-item__img">
                    <img data-src="{{asset('Website/img/image/coconut-soap-HWRZKN3-683x1024-1-200x300.jpg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                        class="js-img" alt="">
                    <span class="blog-item__date">
                        <span>May</span> 19
                    </span>
                </a>
                <a href="Javascript:Void(0);" class="blog-item__title">Exclusive: review of the new line</a>
                <p>Why Peppermint Should Be Considered A Beauty Essential.</p>
                <a href="Javascript:Void(0);" class="blog-item__link">Read more <i class="icon-arrow-md"></i></a>
            </div> --}}
            {{-- <div class="blog-item">
                <a href="Javascript:Void(0);" class="blog-item__img">
                    <img data-src="{{asset('Website/img/image/luchiana-1959282579.jpg')}}" src="data:image/gif;base64,R0lGODlhAQABAAAAACw="
                        class="js-img" alt="">
                    <span class="blog-item__date">
                        <span>May</span> 03
                    </span>
                </a>
                <a href="Javascript:Void(0);" class="blog-item__title">How to keep makeup even in the heat</a>
                <p>Nourish your skin with toxin-free cosmetic products. With the offers that yo skin with
                    toxin-free cosmetic products that you can’t refuse.</p>
                <a href="Javascript:Void(0);" class="blog-item__link">Read more <i class="icon-arrow-md"></i></a>
            </div> --}}
        </div>
        <ul class="paging-list">
            <li class="paging-list__item paging-prev">
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
            </li>
        </ul>
    </div>
    <img class="promo-video__decor js-img" data-src="https://via.placeholder.com/1197x1371/FFFFFF"
        src="data:image/gif;base64,R0lGODlhAQABAAAAACw=" alt="">
</div>
<!-- BLOG EOF   -->
<!-- BEGIN SUBSCRIBE -->
<div class="subscribe">
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
<div class="insta-photos">
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
</div>
<!-- INSTA PHOTOS EOF   -->