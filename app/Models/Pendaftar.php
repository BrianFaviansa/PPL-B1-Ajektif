<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;

    protected $fillable = [
        'kelas_offline_id',
        'nik',
        'nama',
        'no_telpon',
        'motivasi',
    ];
    
    public function kelas() {
        return $this->belongsTo(KelasOffline::class. 'kelas_offline_id');
    }
}
