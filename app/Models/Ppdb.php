<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;
    protected $table = "ppdb";
    protected $fillable = ['nisn','JK','nama','sekolah','n_sekolah','email','no_hp','no_ay','no_ib'];
}
