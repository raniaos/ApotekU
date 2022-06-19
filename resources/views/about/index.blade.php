@extends('layout.apoteku')

@section('content')
<!-- breadcrumb -->
<div class="container p-b-30">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{url('/')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            About
        </span>
    </div>
</div>
    
<!-- Title page -->
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url({{asset('assets/images/bg-01.jpg')}});">
    <h2 class="ltext-105 cl0 txt-center">
        About
    </h2>
</section>	

<!-- Content page -->
<section class="bg0 p-t-75 p-b-120">
    <div class="container">
        <div class="row p-b-148">
            <div class="col-md-7 col-lg-8">
                <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                    <h3 class="mtext-111 cl2 p-b-16">
                        Who are we?
                    </h3>

                    <p class="stext-113 cl6 p-b-26">
                        We’re a unique agency, putting pharmacies at the forefront of web technology
                    </p>

                    <p class="stext-113 cl6 p-b-26">
                        Putting our clients’ needs has been at the core of our team’s culture since day one. We began as a small web design agency and have spent over a decade growing exponentially into a comprehensive digital agency, which provides the best possible design, development, and marketing services for the pharmacy industry through our philosophy of ensuring delivery.
                    </p>

                </div>
            </div>

            <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                <div class="how-bor1 ">
                    <div class="hov-img0">
                        <img src="{{asset('assets/images/about-01.jpg')}}" alt="IMG">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
                <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                    <h3 class="mtext-111 cl2 p-b-16">
                        Advanced Technology in Pharmacy
                    </h3>

                    <p class="stext-113 cl6 p-b-26">
                        Not only have we been providing to the pharmacy sector for over a decade, but we've also got first-hand experience in running pharmacies. Two of the founding partners within our business are community pharmacists, which is why we understand the importance of web technology for your pharmacy.
                    </p>

                    <div class="bor16 p-l-29 p-b-9 m-t-22">
                        <p class="stext-114 cl6 p-r-40 p-b-11">
                            Here in Apotek U, we aim to develop the best pharmacy in the town!
                        </p>

                        <span class="stext-111 cl8">
                            - Valentino Tanjaya (CEO of Apotek U)
                        </span>
                    </div>
                </div>
            </div>

            <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
                <div class="how-bor2">
                    <div class="hov-img0">
                        <img src="{{asset('assets/images/about-02.jpg')}}" alt="IMG">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>	
@endsection

@section('header-class')
header-v4 how-shadow1
@endsection

@section('about-active')
active-menu
@endsection