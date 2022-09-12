<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginControl;
use App\Http\Controllers\RegisterControl;
use App\Http\Controllers\CreateControl;
use App\Http\Controllers\NoteControl;
use App\Http\Controllers\NoteIdControl;

Route::get('/',function (){
    return view('login');
})->name('login');

Route::post("/user-check",[LoginControl::class,'userCheck'])->name('user-check');

Route::get('/register',function (){
    return view('register');
})->name('register');

Route::post("/register-check",[RegisterControl::class,'saveUser'])->name('register-check');


 Route::get('/dashboard',function (){
    return view('dashboard');
})->name('dashboard');

Route::get('/create-note',function (){
    return view('create-note');
})->name('create-note');

Route::post("/notes",[CreateControl::class,'createNote'])->name('notes');

Route::get("/note-control",[NoteControl::class,'noteControl'])->name('note-control');

Route::post("/note-id",[NoteIdControl::class,'showNote'])->name('note-id');

Route::post("/delete",[NoteControl::class,'deleteNote'])->name('delete');

Route::get('/note-history',function (){
    return view('note-history');
})->name('note-history');

Route::get('/show-note',function (){
    return view('show-note');
})->name('show-note');

