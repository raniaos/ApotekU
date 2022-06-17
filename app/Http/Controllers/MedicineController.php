<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;
use DB;
use App\Category;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $medicines = Medicine::all();
        // dd($data);
        return view("medicine.index", compact("medicines", "categories"));
    }

    public function admin(){
        $categories = Category::all();
        $medicines = Medicine::all();
        return view("medicineadmin.index", compact("medicines", "categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view("medicineadmin.create", compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Medicine();
        $data->generic_name = $request->get('generic_name');
        $data->form = $request->get('form');
        $data->restriction_formula = $request->get('restriction_formula');
        $data->price = $request->get('price');
        $data->description = $request->get('description');
        $data->faskes1 = $request->get('faskes1') == 'on' ? 1 : 0;
        $data->faskes2 = $request->get('faskes2') == 'on' ? 1 : 0;
        $data->faskes3 = $request->get('faskes3') == 'on' ? 1 : 0;
        $data->category_id = $request->get('category_id');
        $data->save();

        return redirect('medadmin')
            ->with('status','Medicine has been created');
    }

    /**{{  }}
     * Display the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        $res=$medicine;
        $id = $medicine->category_id;
        $obatSerupa=DB::table('medicines')
            ->where("category_id","=",$id)
            ->get();
        
        return view("medicine.detail", compact('res','obatSerupa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        $med = $medicine;
        $categories = Category::all();
        return view('medicineadmin.edit', compact('med', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \A{{ pp\Medicine  $medicin }}e
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        $medicine->generic_name = $request->get('generic_name');
        $medicine->form = $request->get('form');
        $medicine->restriction_formula = $request->get('restriction_formula');
        $medicine->price = $request->get('price');
        $medicine->description = $request->get('description');
        $medicine->faskes1 = $request->get('faskes1') == 'on' ? 1 : 0;
        $medicine->faskes2 = $request->get('faskes2') == 'on' ? 1 : 0;
        $medicine->faskes3 = $request->get('faskes3') == 'on' ? 1 : 0;
        $medicine->category_id = $request->get('category_id');
        $medicine->save();
        
        return redirect('medadmin')->with('status', 'Medicine has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        try {
            $medicine->delete();

            return redirect('medadmin')->with('status', 'Successfully deleted the medicine');
        } catch(\PDOException $e) {
            $msg = "Failed to delete medicine. Please make sure to delete other data that connected with this medicine.";

            return redirect()->route('medicines.index')->with('error', $msg);
        }
    }

    public function ObatTerlaris() 
    {
        //select m.*, sum(quantity) as qty from medicine_transaction mt inner join medicines m on mt.medicine_id = m.id group by medicine_id order by qty desc
        $data = DB::table('medicines as m')->join('medicine_transaction as mt', 'm.id', '=', 'mt.medicine_id')->select('mt.medicine_id', DB::raw('sum(quantity) as qty'))->orderBy('qty', 'DESC')->groupBy('mt.medicine_id')->get();

        dd($data);
    }

    public function getDetail(Request $request) {
        $id = $request->get('id');
        $data = Medicine::find($id);
        $category = Category::all();
        return response() -> json(array(
            'status' => 'ok',
            'msg' => view('medicine.getDetail', compact('data', 'category'))->render()
        ), 200);
    }

    public function addToCart(Request $request)
    {
        $id = $request->get('id');
        $qty = $request->get('qty');
        $p=Medicine::find($id);
        $cart=session()->get('cart');
        if(!isset($cart[$id])){
            $cart[$id]=[
                "id"=>$id,
                "name"=>$p->generic_name,
                "form"=>$p->form,
                "quantity"=>$qty,
                "price"=>$p->price,
                "photo"=>$p->photo,
                "category"=>$p->category->name
            ];
        }
        else{
            $cart[$id]['quantity']+=$qty;
        }
        session()->put('cart',$cart);
        session()->put('totalCart', count($cart));
        
        return response() -> json(array(
            'status' => 'ok',
            'totalCart' => count($cart)
        ), 200);
    }

    public function updateCart(Request $request) {
        $cart=session()->get('cart');
        $i = 0;
        $temp = array();
        foreach($cart as $c=>$detail) {
            $qty = $request->get('num_'.$i);
            if ($qty != 0) {
                $temp[$c] = [
                    "id"=>$c,
                    "name"=>$detail['name'],
                    "form"=>$detail['form'],
                    "quantity"=>$qty,
                    "price"=>$detail['price'],
                    "photo"=>$detail['photo'],
                    "category"=>$detail['category']
                ];
            }
            $i++;
        }
        session()->put('cart',$temp);
        session()->put('totalCart', count($temp));
        return redirect()->back();
    }
    

    public function cekcart(){
        $cart=session()->get('cart');
        // $jum = count($cart);
        $cart = session('totalCart');
        dd($cart);
    }

    public function bestSelling(){
        $bestSelling = DB::table('medicines as m')
            ->join('medicine_transaction as mt', 'm.id', '=', 'mt.medicine_id')
            ->select('mt.medicine_id as id', DB::raw('sum(quantity) as qty'))
            ->orderBy('qty', 'DESC')
            ->groupBy('mt.medicine_id')
            ->limit(5)
            ->get();
            $result = array();
            
            for ($i=0; $i < 5 ; $i++) { 
                $id = $bestSelling[$i]->id;
                $medicine = DB::table('medicines')
                    ->find($id);
                $result[$i] = array('quantity' => $bestSelling[$i]->qty, 'medicines' => $medicine);
            }
            // foreach ($bestSelling as $m) {
            //     $id = $m->id;
            //     $medicine = DB::table('medicines')
            //         ->find($id);
            //     // array_push($medicines,$medicine);
            // }
        return view("report.bestselling", compact('result'));
    }

    public function cart() {
        return view("cart.index");
    }
}