<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;

class AuthenticationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        return view('register');
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

        $validator = $request->validate([
            'username' => 'required|unique:user',
            'password' => 'required|confirmed|min:6',
            'email' => 'required|email|unique:user',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->with('activeTab', '#register');
        }

        $email = request()->email;
        $username = request()->username;
        $password = Hash::make(request()->password);
        $position = request()->position;

        $user = new User();
        $user->username = $username;
        $user->email = $email;
        $user->password = $password;
        $user->position = $position;
        $user->save();

        auth()->login($user);
        return redirect('/profile/user/'.$user->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        //$user = Users::where( 'username', '=', $request->username )->where( 'password', '=',  )->first();
        $username = request()->username;
        if (!auth()->attempt(request(['username', 'password']))) {
            return back()->withErrors(['message' => 'Wrong password or username']);
        }

        $user = User::where('username', $username)->first();
        auth()->login($user);
        return redirect('/profile/user/'.$user->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
