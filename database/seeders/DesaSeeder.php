<?php

namespace Database\Seeders;

use App\Models\Desa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $desas = [
            'Karang Anyar',
            'Ambulu',
            'Andongsari',
            'Pontang',
            'Sabrang',
            'Sumberrejo',
            'Tegalsari',
            'Ajung',
            'Klompangan',
            'Mangaran',
            'Pancakarya',
            'Rowo Indah',
            'Sukamakmur',
            'Wirowongso',
            'Arjasa',
            'Biting',
            'Candijati',
            'Darsono',
            'Kamal',
            'Kemuninglor',
            'Balung',
            'Bangsalsari',
            'Badean',
            'Sukorejo',
            'Gumukmas',
            'Karangrejo',
            'Jelbuk',
            'Suger Kidul',
            'Cangkring',
            'Jatimulyo',
            'Jatisari',
            'Jenggawah',
            'Seruni',
            'Wonojati',
            'Gambiran',
            'Kalisat',
            'Jember Kidul',
            'Tegal Besar',
            'Kaliwates',
            'Sempusari',
            'Mangli',
            'Kebong Agung',
            'Kepatihan',
            'Kencong',
            'Ledokombo',
            'Mayang',
            'Ledokombo',
            'Mumbulsari',
            'Suco',
            'Tamansari',
            'Pakusari',
            'Jatian',
            'Bedadung',
            'Panti',
            'Serut',
            'Suci',
            'Patrang',
            'Baratan',
            'Bintoro',
            'Slawu',
            'Gebang',
            'Banjar Sengon',
            'Jember Lor',
            'Puger',
            'Wonosari',
            'Rambipuji',
            'Rambigundam',
            'Semboro',
            'Sidomekar',
            'Sidomulyo',
            'Silo',
            'Garahan',
            'Dukuh Mencek',
            'Sukorambi',
            'Sukowono',
            'SumberWringin',
            'Sumberjambe',
            'Sumbersari',
            'Kebonsari',
            'Tegal Gede',
            'Wirolegi',
            'Antirogo',
            'Keranjingan',
            'Tanggul',
            'Tempurejo',
            'Umbulsari',
            'Wuluhan',
        ];

        foreach($desas as $desa) {
            Desa::create([
                'nama' => $desa
            ]);
        }
    }
}
