<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note_table;

class CreateControl extends Controller
{
    public function createNote(Request $request){
        $request->validate([
            'title' => 'required | min:1 | max:255',
            'myNote' => 'required | min:1 | max:1023',
        ]);

        Note_table::create([
            'note_title' =>htmlspecialchars($request->title),
            'note_content' =>htmlspecialchars($request->myNote),
        ]);

        echo "Notunuz başarıyla kaydedilmiştir. ''Notlarım'' sayfasından tüm notlarınızı görüntüleyebilirsiniz.";
        return view('/dashboard');
    }
}
