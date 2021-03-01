<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RegRequests;

class RegistrationController extends Controller
{

    public function index(){
        return view('register.index');
    }

    public function store(RegRequests $req){

        $validated = $req->validated();

        $user = new User();
        $user->email        = $req->email;
        $user->user_name    = $req->user_name;
        $user->password     = $req->password;
        $user->role         = $req->role;
        $user->full_name    = $req->full_name;
        $user->phone        = $req->phone;
        $user->country      = $req->country;
        $user->city         = $req->city;
        $user->address      = $req->address;
        $user->company      = $req->company;
        $user->save();

        return redirect()->route('login.index');

    }
}
