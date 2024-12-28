<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function auth(Request $request){
        // dd($request->all());
        $validateData = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt( $validateData )){
            return redirect()->route('rs.dashboard')->with('success', 'Login Berhasil');
        }else{
            return back()->with('error','Login Gagal');
        }
    }

    public function index(){
        $obats = Obat::all();
        return view('dashboard',compact('obats'));
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function profile(){
        $pengguna = Auth::user();
        return view('user.profile', compact('pengguna'));
    }

    public function edit(){
        $pengguna = Auth::user();
        return view('user.edit', compact('pengguna'));
    }
}
