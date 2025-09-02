<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Walas extends Model
{
    use HasFactory;
    protected $table = 'walas';
    protected $fillable = ['nama', 'email', 'password'];
    protected $hidden = ['password'];
    protected $casts = [
        'password' => 'hashed',
    ];
    public function kelas() {
        return $this->hasOne(Kelas::class, 'walas_id');
    }



}
