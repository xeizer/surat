<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suratkeluar extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'no_surat', 'tgl_keluar', 'tgl_surat', 'tujuan', 'perihal', 'isi', 'lampiran',
    ];
}
