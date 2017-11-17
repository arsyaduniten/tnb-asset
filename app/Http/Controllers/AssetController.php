<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assets;
use App\User;

class AssetController extends Controller
{
    //
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|unique:assets',
            'password' => 'required|confirmed',
            'email' => 'required|email|unique:user',
        ]);

        if ($validator->fails()) {
            return back()
            ->withErrors($validator)
            ->with('activeTab', '#register');
        }
    }

}
