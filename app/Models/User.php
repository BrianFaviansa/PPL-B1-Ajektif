<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Traits\Timestamp;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasTimestamps;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'kode',
        'nama_asintan',
        'jenis_asintan',
        'alasan_pengajuan',
        'dokumen_pengajuan',
        'status',
        'penanggung_jawab',
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

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
