<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class timkami extends Model
{
    use HasFactory;
    protected $table = 'timkami';
    protected $fillable = [
        'nama',
        'jabatan',
        'github',
        'facebook',
        'instagram',
        'youtube',
        'twitter',
        'foto_profil'
    ];
}
