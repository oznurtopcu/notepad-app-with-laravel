<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User_table;

class LoginControl extends Controller
{
    public function userCheck(Request $request){
        $request->validate([
            'username' => 'required | min:3 | max:20',
            'password' => 'required | min:3 | max:20',
        ]);

        $userCheck = User_table::where('username',$request->username)->first();

        if($userCheck == true){
            if (Hash::check( $request->password, $userCheck->password_hash)){
                echo "Başarıyla giriş yapıldı.";
                return view('/dashboard');
            }else{
                echo "Geçersiz şifre.";
                return view('/login');
            }
        }else{
            echo "Geçersiz kullanıcı adı.";
            return view('/login');
        }
    }

}

