@extends('layout.apoteku')

@section('title')
    Create Address
@endsection

@section('content')
<!-- Product -->
<div class="col-lg-10 col-xl-10 m-lr-auto m-b-50 m-t-50">
    <section class="bg0 p-b-60">
		<div class="container">
            <div class="bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <form method="POST" action="{{ url('address') }}">
                    @csrf
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Add Address
                    </h4>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-30 p-r-30" type="text" name="name" placeholder="Name" value="">
                    </div>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-30 p-r-30" type="text" name="address" placeholder="Address" value="">
                    </div>

                    <div class="m-b-20 how-pos4-parent" style="display:flex; gap: 20px;">
                        <input class="bor8 stext-111 cl2 plh3 size-116 p-l-30 p-r-30" type="text" name="districts" placeholder="District" value="">
                        <input class="bor8 stext-111 cl2 plh3 size-116 p-l-30 p-r-30" type="text" name="city" placeholder="City" value="">
                    </div>

                    <div class="m-b-30 how-pos4-parent" style="display:flex; gap: 20px;">
                        <input class="bor8 stext-111 cl2 plh3 size-116 p-l-30 p-r-30" type="text" name="province" placeholder="Province" value="">
                        <input class="bor8 stext-111 cl2 plh3 size-116 p-l-30 p-r-30" type="number" name="postal_code" placeholder="Postal Code" value= "">
                    </div>

                    <button type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                        Create
                    </button>
                </form>
            </div>
		</div>
	</section>	
</div>
@endsection

@section('header-class')
header-v4 how-shadow1
@endsection

@section('medicine-active')
active-menu
@endsection