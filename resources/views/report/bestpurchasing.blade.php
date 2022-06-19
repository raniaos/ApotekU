@extends('layout.apoteku')

@section('title')
    Report - Apotek U
@endsection

@section('content')
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{url('/')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            Report
        </span>
    </div>
</div>
<div class="col-lg-10 col-xl-10 m-lr-auto m-b-50 m-t-50">
    @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span>{{ session('status') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <span>{{ session('error') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="p-b-32 p-l-10 p-r-10" style="display:flex; justify-content:space-between;">
        <h3 class="ltext-103 cl5 txt-center respon1" style="text-transform:none;">
            Top 3 Best Purchasing Customers
        </h3>
    </div>
    <div class="m-lr-0-xl">
        <div class="wrap-table-shopping-cart">
            <table class="table-shopping-cart">
                <tr class="table_head">
                    <th class="column-1" style="text-align:left;">ID</th>
                    <th class="column-3">Name</th>
                    <th class="column-3">Email</th>
                    <th class="column-3">Total Transaction</th>
                    <th class="column-5">Total Spent</th>
                </tr>

                @foreach($result as $bestPurchase)
                <tr class="table_row">
                    <td class="column-1">{{ $bestPurchase['user']->id }}</td>
                    <td class="column-2">{{ $bestPurchase['user']->name }}</td>
                    <td class="column-3">{{ $bestPurchase['user']->email }}</td>
                    <td class="column-3">{{ $bestPurchase['totalTransaction'] }}</td>
                    <td class="column-5">Rp{{ number_format($bestPurchase['totalPurchase'],0,',','.') }}</td>
                </tr>
                @endforeach
            </table>
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