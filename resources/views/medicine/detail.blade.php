@extends('layout.apoteku')

@section('title')
    Medicine Detail - Apotek U
@endsection

@section('content')
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{url('/')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <a href="{{url('medicines')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Medicines
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            {{$res->generic_name}} {{$res->form}}
        </span>
    </div>
</div>
    

<section class="sec-product-detail bg0 p-t-65 p-b-60">
    <div class="container">
        <div class="row">
            @csrf
            <div class="col-md-6 col-lg-7 p-b-30">
                <div class="p-l-25 p-r-30 p-lr-0-lg">
                    <div class="wrap-slick3 flex-sb flex-w">
                        <div class="wrap-slick3-dots"></div>
                        <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

                        <div class="slick3 gallery-lb">
                            <div class="item-slick3" data-thumb="{{asset('assets/images/medicines/'.$res->photo)}}">
                                <div class="wrap-pic-w pos-relative">
                                    <img src="{{asset('assets/images/medicines/'.$res->photo)}}">
                                    <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset('assets/images/medicines/'.$res->photo)}}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-5 p-b-30">
                <div class="p-r-50 p-t-5 p-lr-0-lg">
                    <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                        {{ $res->generic_name }}
                    </h4>

                    <span class="mtext-106 cl2">
                        Rp{{ number_format($res->price,0,',','.') }}
                    </span>

                    <p class="stext-102 cl3 p-t-23">
                        {{ $res->form }}
                    </p>
                    
                    <div class="p-t-33">

                        <div class="flex-w flex-r-m p-b-10">
                            @auth
                                @can('only-customer')
                                    <div class="size-204 flex-w flex-m respon6-next">
                                        <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div>
        
                                            <input class="mtext-104 cl3 txt-center num-product qtyMedicine" type="number" name="num-product" value="1" id="qtyMedicine">
        
                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                <i class="fs-16 zmdi zmdi-plus"></i>
                                            </div>
                                        </div>
        
                                        <input type="hidden" name="idmedicine" value="{{ $res->id }}" class="idmedicine">
                                        <button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail" location="detail">
                                            Add to cart
                                        </button>
                                    </div>
                                @endcan
                            @endauth
                        </div>	
                    </div>
            </div>
            </div>
               
            
        </div>

        <div class="bor10 m-t-50 p-t-43 p-b-40">
            <!-- Tab01 -->
            <div class="tab01">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item p-b-10">
                        <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
                    </li>

                    <li class="nav-item p-b-10">
                        <a class="nav-link" data-toggle="tab" href="#information" role="tab">Additional information</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-t-43">
                    <!-- - -->
                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        <div class="how-pos2 p-lr-15-md">
                            <p class="stext-102 cl6">
                                @if($res->description != "")
                                    {{ $res->description }}
                                @else
                                    No description provided
                                @endif
                            </p>
                        </div>
                    </div>

                    <!-- - -->
                    <div class="tab-pane fade" id="information" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                                <ul class="p-lr-28 p-lr-15-sm">
                                    <li class="flex-w flex-t p-b-7">
                                        <span class="stext-102 cl3 size-205">
                                            Restriction Formula
                                        </span>

                                        <span class="stext-102 cl6 size-206">
                                            {{ $res->restriction_formula }}
                                        </span>
                                    </li>

                                    <li class="flex-w flex-t p-b-7">
                                        <span class="stext-102 cl3 size-205">
                                            Category
                                        </span>

                                        <span class="stext-102 cl6 size-206">
                                            {{ $res->category->name }}
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
        <span class="stext-107 cl6 p-lr-25">
            Categories: {{ $res->category->name }}
        </span>
    </div>
</section>


<!-- Related Products -->
<section class="sec-relate-product bg0 p-t-45 p-b-105">
    <div class="container">
        <div class="p-b-45">
            <h3 class="ltext-106 cl5 txt-center">
                Related Products
            </h3>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">
                @foreach($obatSerupa as $m)
                <div class="item-slick2 p-l-15 p-r-15 p-t-15 p-b-15">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{asset('assets/images/medicines/'.$m->photo)}}">
                            <ul class="product__hover">
                                @auth
                                    @can('only-customer')
                                        <li class="js-addcart-detail" location="list" generic="{{ $m->generic_name }}" id="{{ $m->id }}"><a><img src="{{ asset('assets/images/icon/cart.png') }}" alt=""><span>Add to Cart</span></a></li> 
                                    @endcan
                                @endauth
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

<script>
    function getDetailMedicine(id) {
        $.ajax({
            type: 'POST',
            url: '{{ route("medicines.getDetailMedicine") }}',
            data: { '_token': '<?php echo csrf_token() ?>', 'id':id},
            success: function(data){
                $('.contentDetail').html(data.msg)
            }
        })
    }
</script>

@endsection

@section('header-class')
header-v4 how-shadow1
@endsection

@section('medicine-active')
active-menu
@endsection