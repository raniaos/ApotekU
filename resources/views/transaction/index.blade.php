@extends('layout.apoteku')

@section('title')
    Medicines
@endsection

@section('content')
<!-- Product -->
<div class="col-lg-10 col-xl-10 m-lr-auto m-b-50 m-t-50">
    @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span>{{ session('status') }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="p-b-32 p-l-10 p-r-10" style="display:flex; justify-content:space-between;">
        <h3 class="ltext-103 cl5 txt-center respon1" style="text-transform:none;">
            All Transactions
        </h3>
    </div>
    <div class="m-lr-0-xl">
        <div class="wrap-table-shopping-cart" style="border:none;">
            @foreach($med as $m)
            <div style="border: 1px solid #e6e6e6; padding: 30px; margin: 10px 0;">
                <div style="display:flex; justify-content: space-between; align-items:center;" class="bor12">
                    <div>
                        <p class="stext-110 cl2"><b>Transaction ID &nbsp; &nbsp;</b>{{ $m['tra']['id'] }}</p>

                        <!-- Tampilin kalau punya admin -->
                        <p class="stext-110 cl2"><b>Customer &nbsp; &nbsp;</b>Neilson Soeratman</p>
                        <!-- Tampilin kalau punya admin -->
                    </div>
                    <?php $date = date("d M Y", strtotime($m['tra']['date'])); ?>
                    <p class="stext-110 cl2">{{ $date }}</p>
                </div>  
                <div class="bor12 p-b-17 m-b-20">
                    <table class="table-shopping-cart">
                        <tr class="table_row" style="border:none; height: 120px;">
                            <td class="column-1" style="padding-bottom: 0;">
                                <div class="how-itemcart1">
                                    <img src="{{asset('assets/images/medicines/'.$m['med'][0]['photo'])}}" alt="IMG">
                                </div>
                            </td>
                            <td class="column-2" style="padding-bottom: 0;">
                                {{ $m['med'][0]['generic_name'] }}<br>
                                {{ $m['med'][0]['form'] }}<br>
                                {{ $m['med'][0]->category->name }}
                            </td>
                            <td class="column-3" style="padding-bottom: 0;">Rp{{ number_format($m['med'][0]->pivot->price,0,',','.' )}},-</td>
                            <td class="column-4" style="padding-bottom: 0;">x{{ $m['med'][0]->pivot->quantity }}</td>
                            <td class="column-5" style="padding-bottom: 0;">Rp{{ number_format($m['med'][0]->pivot->price*$m['med'][0]->pivot->quantity,0,',','.' )}},-</td>
                        </tr>
                    </table>
                    <p style="padding-left: 50px; margin:0;">+{{ $m['other'] }} other products</p>
                </div>
                <div style="display:flex; justify-content: space-between;align-items:center;">
                    <p class="stext-110 cl2" style="margin:0;"><b>Total &nbsp; &nbsp;</b>Rp{{ number_format($m['tra']['total'],0,',','.') }},-</p>
                    <a style="width:120px;" href="{{ url('transactions/'.$m['tra']['id']) }}" class="flex-c-m stext-101 cl0 size-111 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                        Detail
                    </a>
                </div>  
            </div>
            @endforeach
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