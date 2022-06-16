@extends('layout.apoteku')

@section('content')
<!-- Product -->
<div class="col-lg-10 col-xl-10 m-lr-auto m-b-50 m-t-50">
    <section class="bg0 p-b-116">
		<div class="container">
            <div class="bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <form>
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Edit Category
                    </h4>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Name">
                        <i class="fa fa-header how-pos4 pointer-none" style="font-size:18px; color: #b2b2b2;"></i>
                    </div>

                    <div class="bor8 m-b-20">
                        <textarea class="stext-111 cl2 plh3 size-110 p-lr-28 p-tb-25" name="msg" row="3" placeholder="Description"></textarea>
                    </div>

                    <button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                        Submit
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

@section('category-active')
active-menu
@endsection