<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'nama_alsintan',
        'jenis_alsintan',
        'alasan_pengajuan',
        'dokumen_pengajuan',
        'status_tk1',
        'status_tk2',
        'tanggapan_bpp',
        'tanggapan_dinas',
        'penanggung_jawab_id',
        'surat_poktan',
        'surat_dinas',
        'user_id',
        'disetujui_at',
        'surat_poktan_uploaded_at',
        'surat_dinas_uploaded_at',
    ];

    protected $dates = [
        'disetujui_at',
        'surat_poktan_uploaded_at',
        'surat_dinas_uploaded_at',
    ];

    protected $casts = [
        'disetujui_at' => 'datetime',
        'surat_poktan_uploaded_at' => 'datetime',
        'surat_dinas_uploaded_at' => 'datetime',
    ];

    public function getVerifikasiAtAttribute($value)
    {
        return $value;
    }

    public function setVerifikasiAtAttribute($value)
    {
        $this->attributes['disetujui_at'] = $value;
    }

    public function getSuratPoktanUploadedAtAttribute($value)
    {
        return $value;
    }

    public function setSuratPoktanUploadedAtAttribute($value)
    {
        $this->attributes['surat_poktan_uploaded_at'] = $value;
    }

    public function getSuratDinasUploadedAtAttribute($value)
    {
        return $value;
    }

    public function setSuratDinasUploadedAtAttribute($value)
    {
        $this->attributes['surat_dinas_uploaded_at'] = $value;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function penanggung_jawab()
    {
        return $this->belongsTo(User::class, 'penanggung_jawab_id');
    }
}
