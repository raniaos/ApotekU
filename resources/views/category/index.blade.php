@extends('layout.apoteku')

@section('content')
<!-- Product -->
<div class="col-lg-10 col-xl-10 m-lr-auto m-b-50 m-t-50">
    <div class="p-b-32 p-l-10 p-r-10" style="display:flex; justify-content:space-between;">
        <h3 class="ltext-103 cl5 txt-center respon1" style="text-transform:none;">
            All Categories
        </h3>
        <div style="width:150px;">
            <a class="flex-c-m stext-101 cl0 size-111 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" style="color:white;">
                Add New
            </a>
        </div>
    </div>
    <div class="m-lr-0-xl">
        <div class="wrap-table-shopping-cart">
            <table class="table-shopping-cart">
                <tr class="table_head">
                    <th class="column-1">Name</th>
                    <th class="column-2">Description</th>
                    <th class="column-5" style="text-align:center;">Action</th>
                </tr>

                <tr class="table_row">
                    <td class="column-1">Category Name</td>
                    <td class="column-2 p-t-20">Tidak digunakan sebagai lini pertama/terapi inisial. Sebagai terapi tambahan pada metformin dan/atau sulfonilurea dengan dosis optimal yang masih dapat ditoleransi oleh pasien.</td>
                    <td class="column-5">
                        <button style="width:120px; margin:auto;" class="flex-c-m stext-101 cl0 size-111 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Edit
						</button>
                        <button style="width:120px; margin: 5px auto;" class="flex-c-m stext-101 cl0 size-111 bg10 bor14 hov-btn4 p-lr-15 m-t-5 trans-04 pointer">
							Delete
						</button>
                    </td>
                </tr>

                <tr class="table_row">
                    <td class="column-1">Category Name</td>
                    <td class="column-2 p-t-20">Tidak digunakan sebagai lini pertama/terapi inisial. Sebagai terapi tambahan pada metformin dan/atau sulfonilurea dengan dosis optimal yang masih dapat ditoleransi oleh pasien.</td>
                    <td class="column-5">
                        <button style="width:120px; margin:auto;" class="flex-c-m stext-101 cl0 size-111 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Edit
						</button>
                        <button style="width:120px;margin: 5px auto;" class="flex-c-m stext-101 cl0 size-111 bg10 bor14 hov-btn4 p-lr-15 m-t-5 trans-04 pointer">
							Delete
						</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection

@section('header-class')
header-v4 how-shadow1
@endsection

@section('category-active')
active-menu
@endsection