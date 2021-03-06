<?php

namespace App\Http\Controllers;

use App\Medicine;
use Illuminate\Http\Request;
use DB;
use App\Category;
use App\Address;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = Medicine::all();
        $categories = Category::all(); 
        $selected = "all";
        $search = "none";

        if (Auth::user()) {
            if (Auth::user()->is_admin) {
                return view("medicineadmin.index", compact("medicines", "categories"));
            }
        }

        return view("medicine.index", compact("medicines", "categories", "selected", "search"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('only-admin');
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
        $this->authorize('only-admin');
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

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imgFolder = "assets/images/medicines";
            $imgFile = strtolower(str_replace(' ', '', ($data->generic_name.$data->form))).'.'.$file->getClientOriginalExtension();
            $file->move($imgFolder, $imgFile);
            $data->photo = $imgFile;
        }

        $data->save();

        return redirect('medicines')
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
        $obatSerupa= DB::table('medicines')
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
        $this->authorize('only-admin');
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
        $this->authorize('only-admin');
        $medicine->generic_name = $request->get('generic_name');
        $medicine->form = $request->get('form');
        $medicine->restriction_formula = $request->get('restriction_formula');
        $medicine->price = $request->get('price');
        $medicine->description = $request->get('description');
        $medicine->faskes1 = $request->get('faskes1') == 'on' ? 1 : 0;
        $medicine->faskes2 = $request->get('faskes2') == 'on' ? 1 : 0;
        $medicine->faskes3 = $request->get('faskes3') == 'on' ? 1 : 0;
        $medicine->category_id = $request->get('category_id');

        if ($request->hasFile('image')) {
            File::delete("assets/images/medicines/".$medicine->photo);
            $file = $request->file('image');
            $imgFolder = "assets/images/medicines";
            $imgFile = strtolower(str_replace(' ', '', ($medicine->generic_name.$medicine->form))).'.'.$file->getClientOriginalExtension();
            $file->move($imgFolder, $imgFile);
            $medicine->photo = $imgFile;
        }

        $medicine->save();
        
        return redirect('medicines')->with('status', 'Medicine has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        $this->authorize('only-admin');
        try {
            $medicine->delete();

            return redirect('medicines')->with('status', 'Successfully deleted the medicine');
        } catch(\PDOException $e) {
            $msg = "Failed to delete medicine. Please make sure to delete other data that connected with this medicine.";

            return redirect()->route('medicines.index')->with('error', $msg);
        }
    }

    public function getMedicineByCategory($id, $name) {
        $medicines = $id != 0 ? Medicine::where('category_id', $id)->get() : Medicine::all();
        $categories = Category::all();
        $selected = $name;
        $search = "none";

        $view = view('medicine.index', compact('medicines', 'categories', 'selected', 'search'));
        $sections = $view->renderSections();

        return response() -> json(array(
            'msg' => $sections['content'],
        ));
    }

    public function getMedicineByKeyword($keyword) {
        $medicines = Medicine::where("generic_name", "like", "%".$keyword."%")
                            ->orWhere("form", "like", "%".$keyword."%")
                            ->get();
        $categories = Category::all();
        $selected = "all";
        $search = $keyword;

        $view = view('medicine.index', compact('medicines', 'categories', 'selected', 'search'));
        $sections = $view->renderSections();

        return response() -> json(array(
            'msg' => $sections['content'],
        ));
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
        $this->authorize('only-customer');
        $id = $request->get('id');
        $qty = $request->get('qty');
        $p=Medicine::find($id);
        $cart=session()->get('cart');
        if (!isset($cart[$id])){
            $cart[$id]=[
                "id"=>$id, "name"=>$p->generic_name, "form"=>$p->form, "quantity"=>$qty,"price"=>$p->price, "photo"=>$p->photo, "category"=>$p->category->name
            ];
        }
        else{
            $cart[$id]['quantity']+=$qty;
        }
        session()->put('cart',$cart);
        session()->put('totalCart', count($cart));
        
        $totalPrice = 0;
        foreach($cart as $id) {
            $totalPrice += $id['price'] * $id['quantity'];
        }
        $formattotal = number_format($totalPrice,0,',','.');
        return response() -> json(array(
            'status' => 'ok',
            'totalCart' => count($cart),
            'name'=>$p->generic_name,
            'price' => $p->price,
            'photo'=>$p->photo,
            'cart' => $cart
        ), 200);
    }

    public function updateCart(Request $request) {
        $this->authorize('only-customer');
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

    public function bestSelling(){
        $this->authorize('only-admin');
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
        return view("report.bestselling", compact('result'));
    }

    public function cart() {
        $this->authorize('only-customer');
        $user = Auth::user()->id;
        $address = Address::where('user_id', $user)->get();
        return view("cart.index", compact('address'));
    }
}