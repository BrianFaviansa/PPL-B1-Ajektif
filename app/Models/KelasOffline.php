<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasOffline extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $casts = [
        'tgl_pelaksanaan' => 'date',
    ];

    protected $dates = [
        'tgl_pelaksanaan',
    ];

    public function penanggung_jawab()
    {
        return $this->belongsTo(User::class, 'penanggung_jawab_id');
    }
}
