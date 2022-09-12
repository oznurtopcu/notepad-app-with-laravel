<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note_table;


class NoteControl extends Controller
{
    public function noteControl(){
        $noteList = Note_table::where('user_id',null)->get();
        echo $noteList;
        return view('/note-history',['noteList'=>$noteList]);
    }

    public function deleteNote(Request $request){
        $note_id = $request->id;
        Note_table::where('id',$note_id)->delete();
        echo "Silme işlemi başarıyla tamamlandı.";
    }


}
