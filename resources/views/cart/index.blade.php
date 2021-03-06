@extends('layout.apoteku')

@section('title')
    Cart - Apotek U
@endsection

@section('content')
<!-- breadcrumb -->
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{url('/')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            Cart
        </span>
    </div>
</div>
@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <span>{{ session('error') }}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<!-- Shoping Cart -->
<form class="bg0 p-t-75 p-b-85" method="POST" action="{{ url('medicines/updateCart') }}">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                <div class="m-l-25 m-r--38 m-lr-0-xl">
                    <div class="wrap-table-shopping-cart">
                        <table class="table-shopping-cart">
                            <tr class="table_head">
                                <th class="column-1">Product</th>
                                <th class="column-2"></th>
                                <th class="column-3">Price</th>
                                <th class="column-4">Quantity</th>
                                <th class="column-5">Subtotal</th>
                            </tr>

                            <?php $total = 0; $i = 0; ?>
                            @if(session('cart'))
                            
                            @foreach(session('cart') as $id=>$m)
                            <input type="hidden" name="id_{{ $i }}" value="{{ $id }}">
                            <tr class="table_row">
                                <td class="column-1">
                                    <div class="how-itemcart1">
                                        <img src="{{asset('assets/images/medicines/'.$m['photo'])}}" alt="IMG">
                                    </div>
                                </td>
                                <td class="column-2"><strong>{{ $m['name'] }}</strong><br>{{ $m['form'] }}<br>{{ $m['category'] }}</td>
                                <td class="column-3">Rp{{ number_format($m['price'],0,',','.') }},-</td>
                                <td class="column-4">
                                    <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                        <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                        </div>

                                        <input class="mtext-104 cl3 txt-center num-product" type="number" name="num_{{ $i }}" value="{{ $m['quantity'] }}">

                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                        </div>
                                    </div>
                                </td>
                                <?php $subtotal = $m['quantity']*$m['price']; $i++; ?>
                                <td class="column-5">Rp{{ number_format($subtotal,0,',','.') }},-</td>
                                <?php $total+=$subtotal ?>
                            </tr>
                            @endforeach
                            @endif

                        </table>
                    </div>

                    <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm" style="justify-content: end;">

                        <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                            <button type="submit" id="updateCartButton">Update Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <form method="POST" action="{{ url('transactions') }}"  class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
            @csrf
            <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-50 m-r-40 m-lr-0-xl p-lr-15-sm">
                <h4 class="mtext-109 cl2 p-b-30">
                    Cart Totals
                </h4>
            
                <!-- shipping -->
                <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                    <div class="size-208 w-full-ssm">
                        <span class="stext-110 cl2">
                            Shipping:
                        </span>
                    </div>

                    <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                        <p class="stext-111 cl6 p-t-2">
                            There are no shipping fee for destination in Indonesia.
                        </p>
                        
                        <div class="p-t-15">
                            <span class="stext-112 cl8">
                                CHOOSE ADDRESS
                            </span>

                            <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                <select class="js-select2" name="address_id" id="address_combobox">
                                    <option value="0">Select address</option>
                                    @foreach($address as $a)
                                        <option value="{{ $a->id }}">{{ $a->name }}</option>
                                    @endforeach
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <p class="stext-111 cl6 p-t-2" id="addressDetail">
                                Address Detail
                            </p>
                                
                        </div>
                    </div>
                </div>

                <div class="flex-w flex-t p-t-27 p-b-33">
                    <div class="size-208">
                        <span class="mtext-101 cl2">
                            Total:
                        </span>
                    </div>

                    <div class="size-209 p-t-1">
                        <span class="mtext-110 cl2">
                            Rp{{ number_format($total,0,',','.') }},-
                        </span>
                    </div>
                </div>

                <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                    Proceed to Checkout
                </button>
            </div>
        </div>
    </div>
</form>
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

    $('#address_combobox').on('change', function() {
        var id = $("#address_combobox option:selected").val();
        if (id != 0) {
            $.ajax({
                type:'GET',
                url:'{{url("address/changeAddress")}}/'+id,
                success:function(data) {
                $("#addressDetail").html(data.msg);
                }
            });
        }
        else $("#addressDetail").html("Choose Address");
    });

</script>

@endsection

@section('header-class')
header-v4 how-shadow1
@endsection