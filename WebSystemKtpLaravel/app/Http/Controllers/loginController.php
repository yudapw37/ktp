<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function postlogin(Request $request){
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/ktp');
        }    
        return redirect('/')->with('statusGagalLogin', 'Login Gagal, Masukkan Username dan Password dengan Benar');
    }

    public function logout(){
        Auth::logout();
        return redirect ('/');
    }

    // public function registrasi(){
    //     return view('Login.registrasi');
    // }

    public function simpanregistrasi(Request $request){
        $a= User::where('username','=', $request->username)->get();
        // dd(count($a));
        if(count($a)!=0){
            return redirect ('/regist')->with('statusGagal', 'Username sudah ada, mohon gunakan usename lain');
        }else{
            User::create([
            'name' => $request->name,
            'level' => $request->level,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
            ]);
            return redirect ('/')->with('statusSukses', 'Data User Berhasil Ditambah!');
        }
    }
}
