<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Address::all();
        dd($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("address.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Address();
        $data->name = $request->get('name');
        $data->address = $request->get('address');
        $data->districts = $request->get('districts');
        $data->city = $request->get('city');
        $data->province = $request->get('province');
        $data->postal_code = $request->get('postal_code');
        $data->user_id = Auth::User()->id;
        $data->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        $res = $address;
        return view("address.edit",compact('res'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        $address->name = $request->get('name');
        $address->address = $request->get('address');
        $address->districts = $request->get('districts');
        $address->city = $request->get('city');
        $address->province = $request->get('province');
        $address->postal_code = $request->get('postal_code');
        $address->user_id = Auth::User()->id;
        $address->save();
        return redirect()->back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        try {
            $address->delete();

            // return redirect('medadmin')->with('status', 'Successfully deleted the medicine');
        } catch(\PDOException $e) {
            $msg = "Failed to delete medicine. Please make sure to delete other data that connected with this medicine.";

            // return redirect()->route('medicines.index')->with('error', $msg);
        }
    }

    public function changeAddress($id) {
        $data = Address::find($id);
        // dd($data);
        // $medicines = $data->medicines;
        return response()->json(array(
            'msg' => " ".$data->address."<br>".$data->districts.", ". $data->city. "<br>".$data->province." ".$data->postal_code
        ), 200);
    }
}
