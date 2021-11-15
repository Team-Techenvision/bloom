 <!-- BEGIN DETAIL MAIN BLOCK -->
 <div class="detail-block detail-block_margin" style="background-image: url({{('images/bg_banner.jpg')}})">
    <div class="wrapper">
        <div class="detail-block__content">
            <h1>User Subcription</h1>
            <ul class="bread-crumbs">
                <li class="bread-crumbs__item">
                    <a href="#" class="bread-crumbs__link">Home</a>
                </li>
                <li class="bread-crumbs__item">User Subcription</li>
            </ul>
        </div>
    </div>
</div>
<!-- DETAIL MAIN BLOCK EOF   -->

<!-- BEGIN PROFILE -->
<div class="profile">
    <div class="wrapper">
        <div class="profile-content">
            <div class="login-form js-img subcription_form" data-src="img/registration-form__bg.png">
                <form  name="registerForm "  method="post" action="{{ url('user-plan-submit') }}" >
                    @csrf
                    <h3>Subscribe now</h3>
                    <div class="box-field m-2">
                            <input type="text" name="name" title="Name" class="form-control" placeholder="Enter your name" value="{{$user->name}}" required>
                    </div>
                    <div class="box-field m-2">
                            <input type="number" name="phone" title="Phone" class="form-control" placeholder="Enter your phone" value="{{$user->phone}}" required>
                    </div>
                    <div class="box-field m-2">
                            <input type="email" name="email" title="Email" class="form-control" placeholder="Enter your email" value="{{$user->email}}" readonly>
                    </div>
                    <div class="box-field m-2">
                        <select class="form-control" name="plan_id" placeholder="Select plan" title="Select plan">
                            <option>Select Plan </option>
                            @foreach($plans as $item)                                   
                            <option value="{{ $item->id }}">{{ $item->plan_name }} Rs. {{$item->price}}</option>  
                        @endforeach      
                          </select>
                    </div>
                    <button class="btn" type="submit">Submit</button>                    
                </form>
            </div>
        </div>
    </div>
    <img class="promo-video__decor js-img" data-src="{{asset('img/promo-video__decor.jpg')}}"
    src="{{asset('img/promo-video__decor.jpg')}}" alt="">
</div>
