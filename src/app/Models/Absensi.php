<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = "tblabsensi";

    protected $fillable = ['jadwal_id','nim','tgl','hadir'];
}
