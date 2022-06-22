<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Address;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('users')->where('is_admin', 0)->get();
        return view("user.index", compact('data'));
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
        if ($request->get('email') == $user->email)
        {
            $validated = $request->validate([
                'name' => 'string|max:255',
                'password' => 'nullable|string|min:8|confirmed',
            ]);
        } else {
            $validated = $request->validate([
                'name' => 'string|max:255',
                'email' => 'string|email|max:255|unique:users',
                'password' => 'nullable|string|min:8|confirmed',
            ]);
        }

        $change = false;
        if ($validated['name'] != $user->name) {
            $change = true;
        }
        
        $user->name = $validated['name'];
        if (isset($validated['email'])) {
            if ($validated['email'] != $user->email) {
                $change = true;
            }
            $user->email = $validated['email'];
        }

        if ($validated['password'] != null) {
            if (Hash::check($validated['password'], $user->password) == false) {
                $change = true;
            }
            $user->password = Hash::make($validated['password']);
        }

        $user->save();
    
        if ($change) {
            return redirect('users/'.Auth::user()->id.'/edit')->with('status', 'Your account successfully updated!');
        }

        return redirect('users/'.Auth::user()->id.'/edit')->with('no_change', 'There is no change');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('only-admin');
        try {
            $user->delete();

            return redirect('users')->with('status', 'Successfully deleted the user');
        } catch(\PDOException $e) {
            $msg = "Failed to delete user. Please make sure to delete other data that connected with this user.";

            return redirect()->route('users.index')->with('error', $msg);
        }
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
}
