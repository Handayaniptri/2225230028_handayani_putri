<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studen extends Model
{
    protected $table = 'student';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'nim',
        'jurusan',
        'alamat'
    ];

    use HasFactory;
}
