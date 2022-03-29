<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.registration');
    }
    public function store(RegisterRequest $request){
     $userData = $request->validated();
     $userData['password'] = Hash::make($userData['password']);
     User::create($userData);

     auth()->attempt($request->only('email', 'password'));
     return redirect()->route('shop');


    }
}
