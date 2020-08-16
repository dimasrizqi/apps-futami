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
        // // dd($request->all());
        // $data = User::where('email',$request->email)->firstOrFail();
        // if($data){
        //     if(\Hash::check($request->password, $data->password)){
        //         return redirect('/home');
        //     }
        // }
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $name = Auth::user()->name;
            $grup = Auth::user()->grup;
            // dd($grup);
            session(['berhasil_login'=> true, 'namanya'=>$name, 'grupnya'=>$grup]);
            return view('home');
        }
        return redirect('/login')->with('message',"Email atau Password salah!!!");
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect('/home');
    }
}
