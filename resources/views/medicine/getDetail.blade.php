<div class="col-md-6 col-lg-7 p-b-30">
    <div class="p-l-25 p-r-30 p-lr-0-lg">
        <div class="wrap-slick3 flex-sb flex-w">
            <div class="wrap-slick3-dots"></div>
            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
            <div class="slick3 gallery-lb">
                <div class="item-slick3" data-thumb="{{asset('assets/images/medicines/'.$data->photo)}}">
                    <div class="wrap-pic-w pos-relative">
                        <img src="{{asset('assets/images/medicines/'.$data->photo)}}" alt="IMG-PRODUCT">

                        <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" target="_blank" href="{{asset('assets/images/medicines/'.$data->photo)}}">
                            <i class="fa fa-expand"></i>
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
            {{ $data->generic_name }}
        </h4>
        <span class="mtext-106 cl2">
            Rp{{ $data->price }},-
        </span>
        <p class="stext-102 cl3 p-t-23">
            @if($data->description != "")
                $data->description
            @else
                No description provided
            @endif
        </p>
        <div class="stext-102 cl3" style="display:flex;">
            <div style="width: 100px;">
                <b>Form</b><br>
                <b>Restriction</b><br>
                <b>Category</b><br>
                <b>Faskes 1</b><br>
                <b>Faskes 2</b><br>
                <b>Faskes 3</b>
            </div>
            <div>
                {{ $data->form }}<br>
                {{ $data->restriction_formula }}<br>
                {{ $data->category->name }}<br>
                @if($data->faskes1 == 1) Available @else Unavailable @endif<br>
                @if($data->faskes2 == 1) Available @else Unavailable @endif<br>
                @if($data->faskes3 == 1) Available @else Unavailable @endif<br>
            </div>    
        </div>
        <div class="p-t-33">
            <div class="flex-w flex-r-m p-b-10">
                <div class="size-204 flex-w flex-m respon6-next">
                    <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                            <i class="fs-16 zmdi zmdi-minus"></i>
                        </div>
                        <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">
                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                            <i class="fs-16 zmdi zmdi-plus"></i>
                        </div>
                    </div>
                    <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                        Add to cart
                    </button>
                </div>
            </div>	
        </div>
    </div>
</div>
<script>
    $('.btn-num-product-down').on('click', function(){
        var numProduct = Number($(this).next().val());
        if(numProduct > 1) $(this).next().val(numProduct - 1);
    });

    $('.btn-num-product-up').on('click', function(){
        var numProduct = Number($(this).prev().val());
        $(this).prev().val(numProduct + 1);
    });
</script>