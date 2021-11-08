@include('Website.Common/head')

<body class="loaded">


    <!-- BEGIN BODY -->

    <div class="main-wrapper">

        <!-- BEGIN CONTENT -->

        <main class="content">
            @if($flag == 1)
                @include('Website.Components/index') 
            @elseif($flag == 2) 
                @include('Website.Components/productList')
            @elseif($flag == 3) 
                @include('Website.Components/categories') 
            @elseif($flag == 4) 
                @include('Website.Components/blog') 
            @elseif($flag == 5) 
                @include('Website.Components/contacts')  
            @elseif($flag == 6) 
                @include('Website.Components/wishlist')
            @elseif($flag == 7) 
                @include('Website.Components/cart') 
            @elseif($flag == 8) 
                @include('Website.Components/about') 
            @elseif($flag == 9) 
                @include('Website.Components/faq') 
            @elseif($flag == 10) 
                @include('Website.Components/registration')
            @elseif($flag == 11) 
                @include('Website.Components/login')
            @elseif($flag == 12) 
                @include('Website.Components/product')                                               
            @elseif($flag == 13) 
                @include('Website.Components/post')
            @elseif($flag == 14) 
                @include('Website.Components/checkout1')     
            @endif
        </main>

        <!-- CONTENT EOF   -->

    

    @include('Website.Common/footer')