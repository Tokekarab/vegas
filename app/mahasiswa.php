<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $fillable = ['nim','nama','alamat','jurusan','foto','jenis_kelamin'];
}
