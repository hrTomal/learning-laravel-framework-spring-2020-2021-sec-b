<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserRequest;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function verify(UserRequest $req){

        $validated = $req->validated();

        $user = DB::table('user')
                    ->where('password', $req->password)
                    ->where('email', $req->email)
                    ->get();

        if($req->email == "" || $req->password == ""){
           $req->session()->flash('msg', 'Email and username cannot be empty');
           return redirect('/login');

        }elseif(count($user) > 0 ){
            //$req->session()->put('email', $req->email);
            //return redirect('/home');
            $user = User::find($req->email);

            $req->session()->put('name', $user->name);

            if($user->role == "Admin"){
                return redirect('/admin');
            }
            else if($user->role == "Customer"){
                return redirect('/customerIndex');
            }
            else if($user->role == "Accountant"){
                return redirect('/accountantIndex');
            }
            else if($user->role == "Sales and Marketing"){
                return redirect('/salesIndex');
            }
            else if($user->role == "Business Partner"){
                return redirect('/partnerIndex');
            }
            else{
                return redirect('/home');

            }
            
        }else{

            $req->session()->flash('msg', 'Invalid username or password...');
            return redirect('/login');
        }
    }
}
