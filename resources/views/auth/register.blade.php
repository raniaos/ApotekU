@extends('layout.apoteku')

@section('title')
    Register
@endsection

@section('content')
<div class="col-lg-7 col-xl-7 m-lr-auto m-b-50 m-t-50">
    <section class="bg0 p-b-60">
		<div class="container">
            <div class="bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Register
                    </h4>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-30 p-r-30 form-control @error('name') is-invalid @enderror" id="text" type="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-30 p-r-30 form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="m-b-30 how-pos4-parent" style="display:flex; gap:20px;">
                        <input class="bor8 stext-111 cl2 plh3 size-116 p-l-30 p-r-30 form-control @error('password') is-invalid @enderror" placeholder="Password" id="password" type="password" name="password" required autocomplete="new-password">

                        <input class="bor8 stext-111 cl2 plh3 size-116 p-l-30 p-r-30 form-control" placeholder="Repeat Password" id="password" type="password" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <button type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                        Register
                    </button>

                    <p class="p-t-20" style="text-align:center;">Already have an account? <a style="padding:0; margin-top: -1px;" class="btn btn-link" href="{{url('login')}}">Login here</a></p>
                </form>
            </div>
		</div>
	</section>
</div>
@endsection

@section('header-class')
header-v4 how-shadow1
@endsection