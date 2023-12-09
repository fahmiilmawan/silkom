<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function auth(Request $request)
    {
        $data = $request->validate([
             'username'=> 'required',
             'password'=> 'required',
        ]);

       if(Auth::attempt($data)) {
            return redirect()->route('dashboardPage');
       }

       return redirect()->back();
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('loginPage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataUser = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        $dataUser = new User;
        $dataUser->username = $request->username;
        $dataUser->email = $request->email;
        $dataUser->password = Hash::make($request->password);
        $dataUser->role = $request->role;
        $dataUser->save();

        return redirect()->route('userPage');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataUser = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $dataUser = User::find($id);
        $dataUser->username = $request->username;
        $dataUser->email = $request->email;
        $dataUser->password = $request->password;
        $dataUser->role = $request->role;
        $dataUser->save();

        return redirect()->route('userPage');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
