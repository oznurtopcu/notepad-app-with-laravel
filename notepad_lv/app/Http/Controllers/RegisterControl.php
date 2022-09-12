<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_table;

class RegisterControl extends Controller
{
    public function saveUser(Request $request){

        $request->validate([
            'firstName' => 'required | min:2 | max:20',
            'lastName' => 'required | min:2 | max:20',
            'email' => 'required | min:3 | max:50 | email',
            'username' => 'required | min:3 | max:20',
            'password' => 'required | min:3 | max:20',
        ]);

        $usernameCheck = User_table::where('username',$request->username)->first('username');
        $emailCheck = User_table::where('email',$request->email)->first('email');

        if($emailCheck == true){
            echo "Bu email kullanılmaktadır.";
            return view('/register');
        } elseif($usernameCheck == true){
            echo "Bu username kullanılamaz.";
            return view('/register');
        } else{
            $hash = Hash::make($request->password);

            User_table::create([
                'first_name' =>htmlspecialchars($request->firstName),
                'last_name' =>htmlspecialchars($request->lastName),
                'email' =>htmlspecialchars($request->email),
                'username' =>htmlspecialchars($request->username),
                'password_hash' =>htmlspecialchars($hash),
            ]);
            echo "Kayıt başarıyla oluşturuldu. Sisteme giriş yapabilirsiniz.";
            return view('/login');
        }
    }
}
