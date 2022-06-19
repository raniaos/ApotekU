@extends('layout.apoteku')

@section('title')
    Create Category - Apotek U
@endsection

@section('content')
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{url('/')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <a href="{{url('categories')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Categories
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            Create
        </span>
    </div>
</div>
<!-- Product -->
<div class="col-lg-10 col-xl-10 m-lr-auto m-b-50 m-t-50">
    <section class="bg0 p-b-116">
		<div class="container">
            <div class="bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <form method="POST" action="{{ url('categories') }}">
                    @csrf
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Add New Category
                    </h4>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="name" placeholder="Name">
                        <i class="fa fa-header how-pos4 pointer-none" style="font-size:18px; color: #b2b2b2;"></i>
                    </div>

                    <div class="bor8 m-b-20">
                        <input class="stext-111 cl2 plh3 size-110 p-lr-28 p-tb-25" name="description" row="3" placeholder="Description">
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