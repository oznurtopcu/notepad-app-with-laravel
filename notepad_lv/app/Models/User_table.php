<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_table extends Model
{
    use HasFactory;
    protected $table = "user_table";
    protected $fillable = ["first_name","last_name","email","username","password_hash","created_at","updated_at"];
}
