<?php

namespace App\Http\Controllers\otentikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;



class OtentikasiController extends Controller
{
    public function index(){
        return view('otentikasi.login');
    }
    public function login(request $request){
        // dd($request->all());
        $data = User::where('email',$request->email)->firstOrFail();
        if($data){
            if(\Hash::check($request->password, $data->password)){
                return redirect('/home');
            }
        }
    }
}
