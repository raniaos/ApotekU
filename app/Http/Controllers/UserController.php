<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Address;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = 
        return view("user.index");
        // dd(User::all());
        // dd($data);
    }

    /**
     * Show the form for creating a n{{ ew resource. }}
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $res = $user;
        $address = Address::all()->where('user_id','=',$user->id);
        return view("user.edit",compact('res','address'));
        // return view("user.edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if ($request->get('password') == $request->get('repeat_password')) {
            $user->name = $request->get('name');
            $user->email = $request->get('email');
            $user->password = Hash::make($request->get('password'));
            
            $user->save();
            return redirect('users/'.Auth::user()->id.'/edit')->with('status', 'your account successfully updated!');
        }
        else 
            return redirect('users/'.Auth::user()->id.'/edit')->with('error', 'Password must be same with repeat password');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required'
        ]);

        $username = $request->username;
        $password = bcrypt($request->password);

        Auth::attempt(['email' => $username, 'password' => $password]);

        return redirect()->route('/');
    }

    public function a()
    {
        dd(User::all());
    }
}
