<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = [
        'nama',
        'nisn',
        'email',
        'password',
        'kelas_id'
    ];
    protected $hidden = [
        'password'
    ];
    protected $casts = [
        'password' => 'hashed',
    ];
    public function kelas() {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
}
