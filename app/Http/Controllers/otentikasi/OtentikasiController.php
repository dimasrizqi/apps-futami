<?php

namespace App\Http\Controllers\otentikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtentikasiController extends Controller
{
    public function index(){
        return view('otentikasi.login');
    }
    public function login(request $request){
        dd($request->all());
    }
}
