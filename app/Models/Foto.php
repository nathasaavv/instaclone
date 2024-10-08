<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $table = 'foto'; // Tentukan nama tabel di sini
    protected $fillable = ['user_id', 'path']; // Kolom yang dapat diisi
}
