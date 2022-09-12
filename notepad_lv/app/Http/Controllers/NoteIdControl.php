<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note_table;

class NoteIdControl extends Controller
{
    public function showNote(Request $request){

        $note_id = $request->id;
        $showNote = Note_table::where('id',$note_id)->first();
        echo $showNote;

        return view('/show-note',['showNote'=>$showNote]);
    }



    public function editNote(){
        $note_id = $request->id;
        $showNote = Note_table::where('id',$note_id)->update();
        echo $showNote;

    }
}
