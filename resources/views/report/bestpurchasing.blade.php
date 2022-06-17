@extends('layout.apoteku')

@section('title')
    Medicines
@endsection

@section('content')
<!-- Product -->
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

                
                <tr class="table_row">
                    <td class="column-1">id</td>
                    <td class="column-2">name</td>
                    <td class="column-3">email</td>
                    <td class="column-3">total transaksi</td>
                    <td class="column-5">Total nominal</td>
                </tr>

                <tr class="table_row">
                    <td class="column-1">id</td>
                    <td class="column-2">name</td>
                    <td class="column-3">email</td>
                    <td class="column-3">total transaksi</td>
                    <td class="column-5">Total nominal</td>
                </tr>

                <tr class="table_row">
                    <td class="column-1">id</td>
                    <td class="column-2">name</td>
                    <td class="column-3">email</td>
                    <td class="column-3">total transaksi</td>
                    <td class="column-5">Total nominal</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection

@section('header-class')
header-v4 how-shadow1
@endsection

@section('medicine-active')
active-menu
@endsection