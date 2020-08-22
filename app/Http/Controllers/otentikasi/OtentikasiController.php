<?php

namespace App\Http\Controllers\otentikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;



class OtentikasiController extends Controller
{
    public function index(){
        return view('otentikasi.login');
    }
    public function login(request $request){
     
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $name = Auth::user()->name;
            $grup = Auth::user()->grup;
            $id_user = Auth::user()->id;
            session(['berhasil_login'=> true, 'namanya'=>$name, 'grupnya'=>$grup,'id_user'=>$id_user]);
            return redirect('/home');
        }
        return redirect('/login')->with('message',"Email atau Password salah!!!");
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect('/home');
    }
}
