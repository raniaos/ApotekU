@extends('layout.apoteku')

@section('title')
    Edit Account - Apotek U
@endsection

@section('content')
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{url('/')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            Edit Account
        </span>
    </div>
</div>

@if(session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <span>{{ session('status') }}</span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session('no_change'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
    <span>{{ session('no_change') }}</span>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <span>{{ session('error') }}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="col-lg-10 col-xl-10 m-lr-auto m-b-50 m-t-50">
    <section class="bg0 p-b-60">
		<div class="container">
            <div class="bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <form method="POST" action="{{ url('users/'.$res->id) }}">
                    @csrf
                    @method('PUT')
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Edit Account
                    
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-30 p-r-30 form-control @error('name') is-invalid @enderror" id="text" type="name" name="name" value="{{ old('name') != '' ? old('name') : $res->name }}" required autocomplete="name" autofocus placeholder="Name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-30 p-r-30 form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') != '' ? old('email') : $res->email }}" required autocomplete="email" placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="m-b-30 how-pos4-parent" style="display:grid; gap:20px; grid-template-columns:1fr 1fr;">
                        <input class="bor8 stext-111 cl2 plh3 size-116 p-l-30 p-r-30 form-control @error('password') is-invalid @enderror" placeholder="Password" id="password" type="password" name="password" autocomplete="new-password">
                            
                        <input class="bor8 stext-111 cl2 plh3 size-116 p-l-30 p-r-30 form-control" placeholder="Repeat Password" id="password" type="password" name="password_confirmation" autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert" style="grid-column:span 2;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <button type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                        Update
                    </button>
                </form>
            </div>
		</div>
	</section>	

    <div class="p-b-32 p-l-15 p-r-15" style="display:flex; justify-content:space-between;">
        <h3 class="ltext-103 cl5 txt-center respon1" style="text-transform:none;">
            All Addresses
        </h3>
        <div style="width:150px;">
            <a href="{{ url('address/create') }}" class="flex-c-m stext-101 cl0 size-111 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" style="color:white;">
                Add New
            </a>
        </div>
    </div>
    <div class="m-lr-0-xl p-b-116 p-l-15 p-r-15">
        <div class="wrap-table-shopping-cart">
            <table class="table-shopping-cart">
                <tr class="table_head">
                    <th class="column-1">Name</th>
                    <th class="column-2">Address</th>
                    <th class="column-5" style="text-align:center;">Action</th>
                </tr>
                
                @foreach($address as $a)
                <tr class="table_row">
                    <td class="column-1" style="padding-top:0; padding-bottom:20px;">{{ $a->name }}</td>
                    <td class="column-2" style="padding-top:0; padding-bottom:20px;">
                        {{ $a->address }}
                        <br>
                        {{ $a->districts }}, {{ $a->city }}
                        <br>
                        {{ $a->province }} {{ $a->postal_code }}
                    </td>
                    <td class="column-5">
                        <a href="{{ url('address/'.$a->id.'/edit') }}">
                            <button style="width:120px; margin:auto;" class="flex-c-m stext-101 cl0 size-111 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Edit
						    </button>
                        </a>
                        <form method="POST" action="{{ url('address/'.$a->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="margin: 5px auto 0 auto; width: 120px;" class="flex-c-m stext-101 cl0 size-111 bg10 bor14 hov-btn4 p-lr-15 trans-04 pointer"
                            onclick="if(!confirm('Are you sure want to delete this address ?')) return false;">
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