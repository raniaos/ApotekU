@extends('layout.apoteku')

@section('title')
    Login - Apotek U
@endsection

@section('content')
<div class="col-lg-7 col-xl-7 m-lr-auto m-b-50 m-t-50">
    <section class="bg0 p-b-60">
		<div class="container">
            <div class="bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Login
                    </h4>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-30 p-r-30 form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-30 p-r-30 form-control @error('password') is-invalid @enderror" placeholder="Password" id="password" type="password" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" style="left: 20px" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember" style="padding-left: 1.75rem">
                            Remember Me
                        </label>
                    </div>

                    <button type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                        Login
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link p-t-20" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    @endif

                    <p class="p-t-20" style="text-align:center;">Don't have an account? <a href="{{url('register')}}" style="padding:0; margin-top: -2px;" class="btn btn-link">Register here</a></p>
                </form>
            </div>
		</div>
	</section>
</div>
@endsection

@section('header-class')
header-v4 how-shadow1
@endsection