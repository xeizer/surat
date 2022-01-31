<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suratmasuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'no_surat', 'tgl_masuk', 'tgl_surat', 'asal_surat', 'perihal', 'lampiran',
    ];
}
