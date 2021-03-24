<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function store(Request $request)
    {
        $user = User::find(Auth::id());
        //  where('id',)->get();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->tel = $request->phone;
        $user->country = $request->country;
        $user->lines = $request->adresse;
        $user->zip_code = $request->zipcode;
        $user->city = $request->city;
        $user->save();
        return redirect()->route('profile-edit');
    }
}