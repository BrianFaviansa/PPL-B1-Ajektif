<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    protected $timeFormat = 'H:i';

    public function getJamPelaksanaanAttribute($value)
    {
        return Carbon::parse($value);
    }

    public function penanggung_jawab()
    {
        return $this->belongsTo(User::class, 'penanggung_jawab_id');
    }
}
