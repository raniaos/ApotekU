@extends('layout.apoteku')

@section('title')
    Medicines - Apotek U
@endsection

@section('content')
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{url('/')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            Medicines
        </span>
    </div>
</div>

<!-- Product -->
<div class="bg0 m-t-23 p-b-140">
    <div class="container">
        <div class="flex-w flex-sb-m p-b-52">
            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                <button class="category-filter stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 {{ $selected == 'all' ? 'how-active1' : '' }}" onclick="getMedicines(0, 'all')">
                    All Category
                </button>

                @foreach($categories as $cat)
                    @if ($cat->name == $selected)
                        <button class="category-filter stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1"
                            onclick="getMedicines({{ $cat->id }}, '{{ $cat->name }}')">
                            {{ $cat->name }}
                        </button>
                    @else
                        <button class="category-filter stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5"
                            onclick="getMedicines({{ $cat->id }}, '{{ $cat->name }}')">
                            {{ $cat->name }}
                        </button>
                    @endif
                @endforeach
            </div>

            <div class="flex-w flex-c-m m-tb-10" style="justify-content: end; width: 100%;">
                <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                    <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                    <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                    Search
                </div>
            </div>
            
            <div class="dis-none panel-search w-full p-t-10 p-b-15">
                <div class="bor8 dis-flex p-l-15">
                    <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search" id="searchmedicine" placeholder="Search">
                </div>	
            </div>

            @if ($search != "none")
            <p>You searched for the keyword <b>"{{$search}}"</b>.</p>
            @endif
        </div>
        
        <div class="row container-medicine">
            @foreach($medicines as $m)
            <div class="col-sm-4 col-md-4 col-lg-3 p-b-35">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="{{asset('assets/images/medicines/'.$m->photo)}}">
                        <ul class="product__hover">
                            <li class="js-addcart-detail" location="list" generic="{{ $m->generic_name }}" id="{{ $m->id }}"><a><img src="{{ asset('assets/images/icon/cart.png') }}" alt=""><span>Add to Cart</span></a></li>
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

<script>
    /*==================================================================
    [ Show modal1 ]*/
    $('.js-show-modal1').on('click',function(e){
        e.preventDefault();
        $('.js-modal1').addClass('show-modal1');
    });

    $('.js-hide-modal1').on('click',function(){
        $('.js-modal1').removeClass('show-modal1');
    });

    $('.set-bg').each(function () {
        var bg = $(this).data('setbg');
        $(this).css('background-image', 'url(' + bg + ')');
    });

    $('.js-show-search').on('click',function(){
        $(this).toggleClass('show-search');
        $('.panel-search').slideToggle(400);
    });
</script>
@endsection

@section('javascript-extra')
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

    function getMedicines(categoryId, nameSelected) {
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: 'medicines/getMedicineByCategory/'+categoryId+'/'+nameSelected,
            success: function(data){
                $('#content-medicine').html(data.msg);
            }
        });
    }

    $(document).on('keyup', '#searchmedicine', function(event) {
        if (event.which === 13){
            event.preventDefault();
            var keyword = $("#searchmedicine").val();
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: 'medicines/getMedicineByKeyword/'+keyword,
                success: function(data){
                    $('#content-medicine').html(data.msg);
                }
            });
        }
    });
</script>
@endsection

@section('header-class')
header-v4 how-shadow1
@endsection

@section('medicine-active')
active-menu
@endsection