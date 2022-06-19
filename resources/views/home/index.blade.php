@extends('layout.apoteku')

@section('title')
    Home - Apotek U
@endsection

@section('content')
<!-- Slider -->
<section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1" style="background-image: url({{asset('assets/images/slide-01.jpg')}});">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                            <span class="ltext-101 cl2 respon2">
                                Best Pharmacy in The Town
                            </span>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                MEDICINES & SERVICES
                            </h2>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                            <a href="{{url('medicines')}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item-slick1" style="background-image: url('{{asset('assets/images/slide-02.jpg')}}');">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                            <span class="ltext-101 cl2 respon2">
                                All Restocked
                            </span>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                New Arrivals
                            </h2>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                            <a href="{{url('medicines')}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item-slick1" style="background-image: url({{asset('assets/images/slide-03.jpg')}});">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
                            <span class="ltext-101 cl2 respon2">
                                Easy Access
                            </span>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                Free Shipping
                            </h2>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                            <a href="{{url('medicines')}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Banner -->
<div class="sec-banner bg0 p-t-80 p-b-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="{{asset('assets/images/banner-01.jpg')}}" alt="IMG-BANNER">

                    <a href="{{url('medicines')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                Injection
                            </span>

                            <span class="block1-info stext-102 trans-04">
                                All Restocked
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Shop Now
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="{{asset('assets/images/banner-02.jpg')}}" alt="IMG-BANNER">

                    <a href="{{url('medicines')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                Solid
                            </span>

                            <span class="block1-info stext-102 trans-04">
                                New Arrival
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Shop Now
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w">
                    <img src="{{asset('assets/images/banner-03.jpg')}}" alt="IMG-BANNER">

                    <a href="{{url('medicines')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                Liquid
                            </span>

                            <span class="block1-info stext-102 trans-04">
                                New Categories
                            </span>
                        </div>

                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                Shop Now
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Product -->
<section class="sec-product bg0 p-t-100 p-b-50">
    <div class="container">
        <div class="p-b-32">
            <h3 class="ltext-105 cl5 txt-center respon1">
                Best Seller
            </h3>
            <p style="text-align:center; margin:0; margin-top: 5px;"><span class="block1-info stext-102 trans-04">Top medicine sold this month!</span></p>
        </div>

        <!-- Tab01 -->
        <div class="tab01">

            <!-- Tab panes -->
            <div class="tab-content p-t-10">
                <!-- - -->
                <div class="tab-pane fade show active" id="best-seller" role="tabpanel">
                    <!-- Slide2 -->
                    <div class="wrap-slick2">
                        <div class="slick2">
                            @foreach($bestSeller as $m)
                            <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{asset('assets/images/medicines/'.$m->photo)}}">
                                        <ul class="product__hover">
                                            @can('only-customer')
                                            <li class="js-addcart-detail" location="list" generic="{{ $m->generic_name }}" id="{{ $m->id }}"><a><img src="{{ asset('assets/images/icon/cart.png') }}" alt=""><span>Add to Cart</span></a></li>
                                            @endcan
                                            <li><a href="#modalDetail" onclick="getDetailMedicine({{ $m->id }})" class="trans-04 js-show-modal1"><img src="{{asset('assets/images/icon/search.png')}}" alt=""><span>Information</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6>{{ $m->generic_name }} {{ $m->form }}</h6>
                                        <a href="{{ url('medicines/'.$m->id) }}" class="add-cart">{{ $m->generic_name }} {{ $m->form }}</a>
                                        <h5>Rp{{ number_format($m->price,0,',','.') }},-</h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section Begin -->
<section class="categories spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="categories__text">
                    <h2>Solid Form <br /> <span>New Arrival</span> <br /> Limited Stock</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories__hot__deal">
                    <img src="{{asset('assets/images/product-sale.png')}}" alt="">
                    <div class="hot__deal__sticker">
                        <span>Sale Of</span>
                        <h5>10%</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <div class="categories__deal__countdown">
                    <span>Deal Of The Week</span>
                    <h2>Obat untuk Hipertrofi Prostat</h2>
                    <div class="categories__deal__countdown__timer" id="countdown">
                        <div class="cd-item">
                            <span>3</span>
                            <p>Days</p>
                        </div>
                        <div class="cd-item">
                            <span>1</span>
                            <p>Hours</p>
                        </div>
                        <div class="cd-item">
                            <span>50</span>
                            <p>Minutes</p>
                        </div>
                        <div class="cd-item">
                            <span>18</span>
                            <p>Seconds</p>
                        </div>
                    </div>
                    <a href="{{url('medicines')}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Blog -->
<section class="sec-blog bg0 p-t-60 p-b-90" id="news">
    <div class="container">
        <div class="p-b-66">
            <h3 class="ltext-105 cl5 txt-center respon1">
                Our News
            </h3>
        </div>

        <div class="row">
            <div class="col-sm-6 col-md-4 p-b-40">
                <div class="blog-item">
                    <div class="hov-img0">
                        <a href="#news">
                            <img src="{{asset('assets/images/blog-01.jpg')}}" alt="IMG-BLOG">
                        </a>
                    </div>

                    <div class="p-t-15">
                        <div class="stext-107 flex-w p-b-14">
                            <span>
                                <span class="cl5">
                                    July 22, 2022 
                                </span>
                            </span>
                        </div>

                        <h4 class="p-b-12">
                            <a href="#news" class="mtext-101 cl2 hov-cl1 trans-04">
                                Pharmacy Renovated
                            </a>
                        </h4>

                        <p class="stext-108 cl6">
                            Great News incoming! Our pharmacy has been renovated so you can enjoy your time in our facility!
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 p-b-40">
                <div class="blog-item">
                    <div class="hov-img0">
                        <a href="#news">
                            <img src="{{asset('assets/images/blog-02.jpg')}}" alt="IMG-BLOG">
                        </a>
                    </div>

                    <div class="p-t-15">
                        <div class="stext-107 flex-w p-b-14">
                            <span>
                                <span class="cl5">
                                    July 18, 2022
                                </span>
                            </span>
                        </div>

                        <h4 class="p-b-12">
                            <a href="#news" class="mtext-101 cl2 hov-cl1 trans-04">
                                Free Medicines Delivery
                            </a>
                        </h4>

                        <p class="stext-108 cl6">
                            Our delivery on medicine purchase is now free for customers in Indonesia! The fee is now borne by the government as a form of assistance due to this pandemic.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 p-b-40">
                <div class="blog-item">
                    <div class="hov-img0">
                        <a href="#news">
                            <img src="{{asset('assets/images/blog-03.jpg')}}" alt="IMG-BLOG">
                        </a>
                    </div>

                    <div class="p-t-15">
                        <div class="stext-107 flex-w p-b-14">
                            <span class="m-r-3">
                            <span>
                                <span class="cl5">
                                    July 22, 2022 
                                </span>
                            </span>
                        </div>

                        <h4 class="p-b-12">
                            <a href="#news" class="mtext-101 cl2 hov-cl1 trans-04">
                                Ramadhan Discount
                            </a>
                        </h4>

                        <p class="stext-108 cl6">
                            Get a 10% off discount on all medicines purchase on this week only until July 24th 2022!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal1 -->
<div class="wrap-modal1 js-modal1 p-t-60 p-b-20" id="modalDetail">
    <div class="overlay-modal1 js-hide-modal1"></div>
    <div class="container">
        <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
            <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                <img src="{{asset('assets/images/icons/icon-close.png')}}" alt="CLOSE">
            </button>
            <div class="row contentDetail">
                
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript-extra')
<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/js/countdown.js')}}"></script>
<script>
    function getDetailMedicine(id) {
        $.ajax({
            type: 'POST',
            url: '{{ route("medicines.getDetailMedicine") }}',
            data: { '_token': '<?php echo csrf_token() ?>', 'id':id},
            success: function(data){
                $('.contentDetail').html(data.msg);
            }
        })
    }
</script>
@endsection

@section('home-active')
active-menu
@endsection