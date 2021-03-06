@extends('layout.apoteku')

@section('title')
    Edit Medicine - Apotek U
@endsection

@section('content')
<div class="container">
    <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
        <a href="{{url('/')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Home
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <a href="{{url('categories')}}" class="stext-109 cl8 hov-cl1 trans-04">
            Medicines
            <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
        </a>

        <span class="stext-109 cl4">
            Edit
        </span>
    </div>
</div>
<div class="col-lg-10 col-xl-10 m-lr-auto m-b-50 m-t-50">
    <section class="bg0 p-b-116">
		<div class="container">
            <div class="bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                <form method="POST" action="{{ url('medicines/'.$med->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h4 class="mtext-105 cl2 txt-center p-b-30">
                        Edit Medicine
                    </h4>
                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="generic_name" placeholder="Generic Name" value="{{ $med->generic_name }}">
                        <i class="fa fa-header how-pos4 pointer-none" style="font-size:18px; color: #b2b2b2;"></i>
                    </div>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="form" placeholder="Form" value="{{ $med->form }}">
                        <i class="fa fa-cube how-pos4 pointer-none" style="font-size:18px; color: #b2b2b2;"></i>
                    </div>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="price" placeholder="Price" value="{{ $med->price }}">
                        <i class="fa fa-money how-pos4 pointer-none" style="font-size:18px; color: #b2b2b2;"></i>
                    </div>

                    <div class="bor8 m-b-20 how-pos4-parent">
                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="restriction_formula" placeholder="Restriction Formula" value="{{ $med->restriction_formula }}">
                        <i class="fa fa-remove how-pos4 pointer-none" style="font-size:18px; color: #b2b2b2;"></i>
                    </div>

                    <div class="bor8 m-b-20">
                        <textarea class="stext-111 cl2 plh3 size-110 p-lr-28 p-tb-25" name="description" row="3" placeholder="Description">{{ $med->description }}</textarea>
                    </div>

                    <div class="m-b-10 how-pos4-parent" style="display:flex; align-items:center;">
                        <p class="p-r-20 m-b-0" style="width: 120px;">Faskes 1</p>
                        <input class="stext-111 cl2 plh3 p-l-62 p-r-30" type="checkbox" name="faskes1" {{ ($med->faskes1 == 1) ? 'checked' : '' }}>
                    </div>
                    <div class="m-b-10 how-pos4-parent" style="display:flex; align-items:center;">
                        <p class="p-r-20 m-b-0" style="width: 120px;">Faskes 2</p>
                        <input class="stext-111 cl2 plh3 p-l-62 p-r-30" type="checkbox" name="faskes2" {{ ($med->faskes2 == 1) ? 'checked' : '' }}>
                    </div>
                    <div class="m-b-20 how-pos4-parent" style="display:flex; align-items:center;">
                        <p class="p-r-20 m-b-0" style="width: 120px;">Faskes 3</p>
                        <input class="stext-111 cl2 plh3 p-l-62 p-r-30" type="checkbox" name="faskes3" {{ ($med->faskes3 == 1) ? 'checked' : '' }}>
                    </div>
                    <div class="m-b-20 how-pos4-parent" style="display:flex; align-items:center;">
                        <p class="p-r-20 m-b-0" style="width: 120px;">Category</p>
                        <div class="size-204 respon6-next">
                            <div class="rs1-select2 bor8 bg0">
                                <select class="js-select2" name="category_id">
                                    <option value="">Choose an option</option>
                                    @foreach($categories as $cat)
                                        @if($cat->id == $med->category_id)
                                            <option value="{{ $cat->id }}" selected>{{ $cat->name }}</option>
                                        @else
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="m-b-40 how-pos4-parent" style="display:flex; align-items:center;">
                        <p class="p-r-20 m-b-0" style="width: 120px;">Image</p>
                        <input class="stext-111 cl2 plh3" type="file" name="image">
                    </div>

                    <button type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                        Update
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