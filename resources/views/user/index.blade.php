@extends('layout.apoteku')
@section('title')
    Users - Apotek U
@endsection

@section('content')
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{url('/')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            Users
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
            All Users
        </h3>
    </div>
    <div class="m-lr-0-xl">
        <div class="wrap-table-shopping-cart">
            <table class="table-shopping-cart">
                <tr class="table_head">
                    <th class="column-1">Name</th>
                    <th class="column-2">Email</th>
                    <th class="column-5" style="text-align:center;">Action</th>
                </tr>

                @foreach($data as $d)
                    <tr class="table_row">                       
                            <td class="column-1">{{ $d->name }}</td>
                            <td class="column-2 p-t-20">{{ $d->email }}</td>
                            <td class="column-5">
                                    <a href="{{ url('users/'.$d->id).'/edit' }}" style="width:120px; margin:auto;" class="flex-c-m stext-101 cl0 size-111 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                                    Edit
                                    </a>

                                <form method="POST" action="{{ url('users/'.$d->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="margin: 5px auto 0 auto; width: 120px;" class="flex-c-m stext-101 cl0 size-111 bg10 bor14 hov-btn4 p-lr-15 m-t-5 trans-04 pointer"
                                    onclick="if(!confirm('Are you sure want to delete this user ?')) return false;">
                                    Delete
                                    </button>
                                </form>
                            </td>
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

@section('user-active')
active-menu
@endsection