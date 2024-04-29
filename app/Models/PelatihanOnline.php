<?php

namespace App\Models;

use Cohensive\OEmbed\Facades\OEmbed;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelatihanOnline extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'video',
        'ringkasan',
        'penanggung_jawab_id',
    ];

    public function penanggung_jawab()
    {
        return $this->belongsTo(User::class, 'penanggung_jawab_id');
    }

    public function getVideoUrlAttribute($value)
    {
        $embed = OEmbed::get($value);
        if ($embed) {
            // Mengembalikan hanya link video saja
            return $embed->providerUrl;
        }

        return $value;
    }
}
