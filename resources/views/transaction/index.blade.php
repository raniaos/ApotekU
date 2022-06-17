@extends('layout.apoteku')

@section('title')
    Medicines
@endsection

@section('content')
<!-- Product -->
<div class="col-lg-10 col-xl-10 m-lr-auto m-b-50 m-t-50">
    <div class="p-b-32 p-l-10 p-r-10" style="display:flex; justify-content:space-between;">
        <h3 class="ltext-103 cl5 txt-center respon1" style="text-transform:none;">
            All Transactions
        </h3>
    </div>
    <div class="m-lr-0-xl">
        <div class="wrap-table-shopping-cart" style="border:none;">
            <div style="border: 1px solid #e6e6e6; padding: 30px; margin: 10px 0;">
                <div style="display:flex; justify-content: space-between;" class="bor12">
                    <p class="stext-110 cl2"><b>Transaction ID &nbsp; &nbsp;</b>1</p>
                    <p class="stext-110 cl2">12 Jan 2020</p>
                </div>  
                <table class="table-shopping-cart">
                    <tr class="table_row" style="border:none; height: 120px;">
                        <td class="column-1" style="padding-bottom: 0;">
                            <div class="how-itemcart1">
                                <img src="http://localhost:8000/assets/images/item-cart-04.jpg" alt="IMG">
                            </div>
                        </td>
                        <td class="column-2" style="padding-bottom: 0;">
                            Generic Name<br>
                            Form<br>
                            Category Name
                        </td>
                        <td class="column-3" style="padding-bottom: 0;">Rp1000</td>
                        <td class="column-4" style="padding-bottom: 0;">x3</td>
                        <td class="column-5" style="padding-bottom: 0;">Rp3000</td>
                    </tr>
                </table>
                <p style="padding-left: 50px; padding-bottom: 17px;" class="bor12">+2 other products</p>
                <div style="display:flex; justify-content: space-between;align-items:center;">
                    <p class="stext-110 cl2" style="margin:0;"><b>Total &nbsp; &nbsp;</b>Rp2000</p>
                    <a style="width:120px;" href="#" class="flex-c-m stext-101 cl0 size-111 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                        Detail
                    </a>
                </div>  
            </div>
            <div style="border: 1px solid #e6e6e6; padding: 30px; margin: 10px 0;">
                <div style="display:flex; justify-content: space-between;" class="bor12">
                    <p class="stext-110 cl2"><b>Transaction ID &nbsp; &nbsp;</b>1</p>
                    <p class="stext-110 cl2">12 Jan 2020</p>
                </div>  
                <table class="table-shopping-cart">
                    <tr class="table_row" style="border:none; height: 120px;">
                        <td class="column-1" style="padding-bottom: 0;">
                            <div class="how-itemcart1">
                                <img src="http://localhost:8000/assets/images/item-cart-04.jpg" alt="IMG">
                            </div>
                        </td>
                        <td class="column-2" style="padding-bottom: 0;">
                            Generic Name<br>
                            Form<br>
                            Category Name
                        </td>
                        <td class="column-3" style="padding-bottom: 0;">Rp1000</td>
                        <td class="column-4" style="padding-bottom: 0;">x3</td>
                        <td class="column-5" style="padding-bottom: 0;">Rp3000</td>
                    </tr>
                </table>
                <p style="padding-left: 50px; padding-bottom: 17px;" class="bor12">+2 other products</p>
                <div style="display:flex; justify-content: space-between;align-items:center;">
                    <p class="stext-110 cl2" style="margin:0;"><b>Total &nbsp; &nbsp;</b>Rp2000</p>
                    <a style="width:120px;" href="#" class="flex-c-m stext-101 cl0 size-111 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                        Detail
                    </a>
                </div>  
            </div>
            <div style="border: 1px solid #e6e6e6; padding: 30px; margin: 10px 0;">
                <div style="display:flex; justify-content: space-between;" class="bor12">
                    <p class="stext-110 cl2"><b>Transaction ID &nbsp; &nbsp;</b>1</p>
                    <p class="stext-110 cl2">12 Jan 2020</p>
                </div>  
                <table class="table-shopping-cart">
                    <tr class="table_row" style="border:none; height: 120px;">
                        <td class="column-1" style="padding-bottom: 0;">
                            <div class="how-itemcart1">
                                <img src="http://localhost:8000/assets/images/item-cart-04.jpg" alt="IMG">
                            </div>
                        </td>
                        <td class="column-2" style="padding-bottom: 0;">
                            Generic Name<br>
                            Form<br>
                            Category Name
                        </td>
                        <td class="column-3" style="padding-bottom: 0;">Rp1000</td>
                        <td class="column-4" style="padding-bottom: 0;">x3</td>
                        <td class="column-5" style="padding-bottom: 0;">Rp3000</td>
                    </tr>
                </table>
                <p style="padding-left: 50px; padding-bottom: 17px;" class="bor12">+2 other products</p>
                <div style="display:flex; justify-content: space-between;align-items:center;">
                    <p class="stext-110 cl2" style="margin:0;"><b>Total &nbsp; &nbsp;</b>Rp2000</p>
                    <a style="width:120px;" href="#" class="flex-c-m stext-101 cl0 size-111 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                        Detail
                    </a>
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection

@section('header-class')
header-v4 how-shadow1
@endsection

@section('report-active')
active-menu
@endsection