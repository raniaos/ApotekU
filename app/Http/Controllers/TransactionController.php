<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Carbon\Carbon;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        $data = Transaction::where('user_id', $user)->orderBy('date','desc')->get();
        $med = array();
        foreach ($data as $d) {
            $dataa = $d->medicines;
            $totalData = count($dataa)-1;
            array_push($med, array('tra' => $d, 'med' => $dataa, 'other' => $totalData));
        }
        return view("transaction.index", compact('med'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in {{ storage. }}
     *
     * @param  \Illuminate\Http\Request  {{ $request }}
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $address = $request->get('address_id');
        if($address != 0) {
            $cart = session()->get('cart');
            $user = Auth::user();
            $t = new Transaction;
            $t->address_id = $address;
            $t->user_id = $user->id;
            $t->date = Carbon::now()->toDateTimeString();
            $t->save();

            $total = $t->insertMedicines($cart, $user);
            $t->total = $total;
            $t->save();

            session()->forget('cart');
            return redirect()->route('transactions.index')
                ->with('status','New transaction successful!');
        }
        else {
            return redirect()->back()
                ->with('error','Choose address first!');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        $res = Transaction::where('id','=',$transaction->id)->get();
        $med = array();
        // dd($res);
        $data = $res->medicines;
        array_push($med, array('tra' => $d, 'med' => $data));
        dd($med);
        return view("transaction.detail",compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    public function report(){
        return view("report.transaction");
    }

    public function bestPurchasing(){
        $bestPurchasing = DB::table('transactions as t')
            ->join('users as u', 'u.id', '=', 't.user_id')
            ->select('t.user_id as id', DB::raw('sum(total) as purchase'),DB::raw('count(t.id) as totalTransaction'))
            ->orderBy('purchase', 'DESC')
            ->groupBy('t.user_id')
            ->limit(3)
            ->get();
        $result = array();
        foreach ($bestPurchasing as $p) {
                $id = $p->id;
                $user = DB::table('users')
                    ->find($id);
                    // dd($user);
                array_push($result,['user'=>$user, 'totalPurchase'=>$p->purchase,'totalTransaction'=>$p->totalTransaction]);
            }
        return view("report.bestpurchasing",compact('result'));
    }

    public function getDetail(Request $request) {
        $id = $request->get('id');
        $data = Transaction::find($id);
        $medicine = Medicine::all();
        return response() -> json(array(
            'status' => 'ok',
            'msg' => view('medicine.getDetail', compact('data', 'category'))->render()
        ), 200);
    }
}{{  }}