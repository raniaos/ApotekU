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
            All Medicines
        </h3>
        <div style="width:150px;">
            <a href="{{ url('medicines/create') }}" class="flex-c-m stext-101 cl0 size-111 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" style="color:white;">
                Add New
            </a>
        </div>
    </div>
    <div class="m-lr-0-xl">
        <div class="wrap-table-shopping-cart">
            <table class="table-shopping-cart">
                <tr class="table_head">
                    <th class="column-1">Medicine</th>
                    <th class="column-2"></th>
                    <th class="column-3">Price</th>
                    <th class="column-3">Restriction</th>
                    <th class="column-2">Description</th>
                    <th class="column-6">Faskes 1</th>
                    <th class="column-7">Faskes 2</th>
                    <th class="column-8">Faskes 3</th>
                    <th class="column-5" style="text-align:center;">Action</th>
                </tr>

                @foreach($medicine as $m)
                <tr class="table_row">
                    <td class="column-1">
                        <div class="how-itemcart1">
                            <img src="{{asset('assets/images/medicines/'.$m->photo)}}" alt="IMG">
                        </div>
                    </td>
                    <td class="column-2">{{ $m->generic_name }}<br>{{ $m->form }}<br>{{ $m->Category->name }}</td>
                    <td class="column-3">Rp{{ $m->price }},-</td>
                    <td class="column-3">{{ $m->restriction_formula }}</td>
                    <td class="column-2 p-t-20">{{ $m->description }}</td>
                    <td class="column-6">
                        <div style="text-align:center;" class="icon-header-item cl2 hov-cl1 trans-04 p-l-11 p-r-11">
                            @if($m->faskes1)
                                <i class="zmdi zmdi-check-circle"></i>
                            @else
                                <i class="zmdi zmdi-minus-circle"></i>
                            @endif
                        </div>
                    </td>
                    <td class="column-7">
                        <div style="text-align:center;" class="icon-header-item cl2 hov-cl1 trans-04 p-l-11 p-r-11">
                            @if($m->faskes2)
                                <i class="zmdi zmdi-check-circle"></i>
                            @else
                                <i class="zmdi zmdi-minus-circle"></i>
                            @endif
                        </div>
                    </td>
                    <td class="column-8">
                        <div style="text-align:center;" class="icon-header-item cl2 hov-cl1 trans-04 p-l-11 p-r-11">
                            @if($m->faskes3)
                                <i class="zmdi zmdi-check-circle"></i>
                            @else
                                <i class="zmdi zmdi-minus-circle"></i>
                            @endif
                        </div>
                    </td>
                    <td class="column-5">
                        <a href="{{ url('medicines/'.$m->id.'/edit') }}" class="flex-c-m stext-101 cl0 size-111 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Edit
                        </a>
                        <form method="POST" action="{{ url('medicines/'.$m->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="flex-c-m stext-101 cl0 size-111 bg10 bor14 hov-btn4 p-lr-15 m-t-5 trans-04 pointer"
                            onclick="if(!confirm('Are you sure want to delete this medicine ?')) return false;">
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

@section('medicine-active')
active-menu
@endsection