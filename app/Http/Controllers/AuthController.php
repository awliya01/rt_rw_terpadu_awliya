<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataPenduduk;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function postregister(Request $request)
    {
        // dd($request->password);
        $password = $request->password; 

        $user = new User();
        $user->role = $request->role;
        $user->nik = $request->nik;
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($password);
        $user->remember_token = Str::random(32);
        // dd($user);
        $user->save();
        $fill = [
            'nik'=>$user->nik,
            'nama'=>$user->nama,
            'email'=>$user->email,
            'password'=>$request->password,
            'user_id'=>$user->id
        ];

        DataPenduduk::create($fill);
        // dd($fill, $user);
        
        return redirect('/login');
    }

    public function login()
    {
        return view('auth.login');
    }
    
    public function postlogin(Request $request)
    {
        // $this->validate($request,[
        //     'nik'=>'required',
        //     'password'=>'required'
        // ]);

        // dd($request->password);
        // $email = $request->nik;
        // $password = $request->password;
        if (Auth::attempt($request->only('nik','password'))) {
            return redirect('/rw');
        } 
        echo "error";

    }
}
