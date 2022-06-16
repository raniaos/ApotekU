@extends('layout.apoteku')

@section('title')
    Create Medicine
@endsection

@section('content')
<!-- Product -->
<div class="col-lg-10 col-xl-10 m-lr-auto m-b-50 m-t-50">
    <section class="bg0 p-b-116">
		<div class="container">
            <div class="bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <form method="POST" action="{{ url('medicines') }}">
                    @csrf
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Add New Medicine
                    </h4>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="generic_name" placeholder="Generic Name">
                        <i class="fa fa-header how-pos4 pointer-none" style="font-size:18px; color: #b2b2b2;"></i>
                    </div>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="form" placeholder="Form">
                        <i class="fa fa-cube how-pos4 pointer-none" style="font-size:18px; color: #b2b2b2;"></i>
                    </div>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="price" placeholder="Price">
                        <i class="fa fa-money how-pos4 pointer-none" style="font-size:18px; color: #b2b2b2;"></i>
                    </div>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="restriction_formula" placeholder="Restriction Formula">
                        <i class="fa fa-remove how-pos4 pointer-none" style="font-size:18px; color: #b2b2b2;"></i>
                    </div>

                    <div class="bor8 m-b-20">
                        <textarea class="stext-111 cl2 plh3 size-110 p-lr-28 p-tb-25" name="description" row="3" placeholder="Description"></textarea>
                    </div>

                    <div class="m-b-10 how-pos4-parent" style="display:flex; align-items:center;">
                        <p class="p-r-20 m-b-0" style="width: 120px;">Faskes 1</p>
                        <input class="stext-111 cl2 plh3 p-l-62 p-r-30" type="checkbox" name="faskes1">
                    </div>
                    <div class="m-b-10 how-pos4-parent" style="display:flex; align-items:center;">
                        <p class="p-r-20 m-b-0" style="width: 120px;">Faskes 2</p>
                        <input class="stext-111 cl2 plh3 p-l-62 p-r-30" type="checkbox" name="faskes2">
                    </div>
                    <div class="m-b-20 how-pos4-parent" style="display:flex; align-items:center;">
                        <p class="p-r-20 m-b-0" style="width: 120px;">Faskes 3</p>
                        <input class="stext-111 cl2 plh3 p-l-62 p-r-30" type="checkbox" name="faskes3">
                    </div>
                    <div class="m-b-20 how-pos4-parent" style="display:flex; align-items:center;">
                        <p class="p-r-20 m-b-0" style="width: 120px;">Category</p>
                        <div class="size-204 respon6-next">
                            <div class="rs1-select2 bor8 bg0">
                                <select class="js-select2" name="category_id">
                                    <option value="">Choose an option</option>
                                    @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="m-b-40 how-pos4-parent" style="display:flex; align-items:center;">
                        <p class="p-r-20 m-b-0" style="width: 120px;">Image</p>
                        <input class="stext-111 cl2 plh3" type="file" name="email">
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