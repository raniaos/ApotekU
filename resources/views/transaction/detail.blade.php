@extends('layout.apoteku')

@section('title')
    Transaction Detail - Apotek U
@endsection

@section('content')
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{url('/')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <a href="{{url('transactions')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Transactions
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            Detail
        </span>
    </div>
</div>
    

<!-- Shoping Cart -->
<div class="container">
    <div class="col-lg-10 col-xl-10 m-lr-auto m-b-50 m-t-50" style="padding: 0 !important;">
        <div class="bor10 p-lr-40 p-t-30 p-b-40 m-lr-0-xl p-lr-15-sm">
            <h4 class="mtext-109 cl2 p-b-30">
                Transaction Detail
            </h4>

            <div class="flex-w flex-t p-b-13">
                <div class="size-208">
                    <span class="stext-110 cl2">
                        Transaction ID:
                    </span>
                </div>

                <div class="size-209">
                    <span class="mtext-110 cl2">
                        {{ $data[0]['transaction']->id }}
                    </span>
                </div>
            </div>

            <div class="flex-w flex-t bor12 p-b-13">
                <div class="size-208">
                    <span class="stext-110 cl2">
                        Date:
                    </span>
                </div>
                <?php $date = date("d M Y", strtotime($data[0]['transaction']->date)); ?>
                <div class="size-209">
                    <span class="mtext-110 cl2">
                        {{ $date }}
                    </span>
                </div>
            </div>

            <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                <div class="size-208 w-full-ssm">
                    <span class="stext-110 cl2">
                        Customer:
                    </span>
                </div>

                <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                    <p class="stext-111 cl6 p-t-2">
                        {{ $data[0]['transaction']->user->name }}
                        <br>
                        {{ $data[0]['transaction']->user->email }}
                    </p>
                    
                    <div class="p-t-15">
                        <span class="stext-112 cl8">
                            Address
                        </span>
                        <p class="stext-111 cl6 p-t-2">
                            {{ $data[0]['address']->address }}
                            <br>
                            {{ $data[0]['address']->districts }}, {{ $data[0]['address']->city }}
                            <br>
                            {{ $data[0]['address']->province }} {{ $data[0]['address']->postal_code }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex-w flex-t p-t-27">
                <div class="size-208">
                    <span class="mtext-101 cl2">
                        Total:
                    </span>
                </div>

                <div class="size-209 p-t-1">
                    <span class="mtext-110 cl2">
                        Rp {{ number_format($data[0]['transaction']->total,0,',','.') }},-
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-10 col-xl-10 m-lr-auto m-b-50 m-t-50" style="padding: 0 !important;">
            <div class="m-lr-0-xl">
                <div class="wrap-table-shopping-cart">
                    <table class="table-shopping-cart">
                        <tr class="table_head">
                            <th class="column-1">Medicine</th>
                            <th class="column-2"></th>
                            <th class="column-3">Price</th>
                            <th class="column-4">Quantity</th>
                            <th class="column-5">Total</th>
                        </tr>
                        @foreach($data[0]['transaction']->medicines as $m)
                        <tr class="table_row">
                            <td class="column-1">
                                <div class="how-itemcart1">
                                    <img src="{{asset('assets/images/medicines/'.$m->photo)}}" alt="IMG">
                                </div>
                            </td>
                            <td class="column-2">
                                {{ $m->generic_name }}<br>
                                {{ $m->form }}<br>
                                {{ $m->category->name }}
                            </td>
                            <td class="column-3">Rp {{ number_format($m->price,0,',','.')}},-</td>
                            <td class="column-4">{{ $m->pivot->quantity}}</td>
                            <td class="column-5">Rp {{ number_format($m->price * $m->pivot->quantity,0,',','.')}},-</td>
                        </tr>
                        @endforeach
                    </table>
                </div>

                <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                    <div class="flex-w flex-m m-r-20 m-tb-5">
                        <b>Total</b>
                    </div>

                    <div class="flex-c-m stext-101 cl2 size-119  m-tb-10" style="justify-content:end;">
                        <b>Rp {{ number_format($data[0]['transaction']->total,0,',','.')}},- </b>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection

@section('header-class')
header-v4 how-shadow1
@endsection

@section('report-active')
active-menu
@endsection