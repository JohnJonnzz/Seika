<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function check(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('admin')->with('success', 'Admin berhasil login');
        }

        return back()->with('error', 'Email/Password anda salah');
    }

    public function forgot(){
        return view('forgot');
    }

    public function change(Request $request){
        $request->validate([
            'question' => 'required',
            'new_password' => 'required',
        ]);

        $user = DB::table('users')->get();

        if($user[0]->question != $request->question){
            return redirect()->route('forgot')
            ->with('error', 'Pertanyaan tidak sesuai');
        }

        $affected = DB::table('users')
        ->where('id', $user[0]->id)
        ->update(['password' => password_hash($request->new_password, PASSWORD_DEFAULT)]);
        

        if($affected <= 0){
            return redirect()->route('forgot')
            ->with('error', 'Gagal ubah password');
        }
        
        return redirect()->route('login')
        ->with('success', 'Ganti password berhasil');
        
    }


    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
