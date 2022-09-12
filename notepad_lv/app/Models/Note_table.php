<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note_table extends Model
{
    use HasFactory;
    protected $table = "note_table";
    protected $fillable = ["user_id","note_title","note_content","date_time","created_at","updated_at"];
}
