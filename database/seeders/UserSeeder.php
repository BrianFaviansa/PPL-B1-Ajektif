<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'poktan_1',
            'password' => bcrypt('password'),
            'desa_id' => 11,
            'no_reg' => 'PK09812897',
            'nama' => 'Poktan Jember 1',
            'alamat' => 'Kecamatan Ajung, Kabupaten Jember',
            'jml_anggota' => 10,
            'no_telpon' => '1111'
        ]);
        User::create([
            'username' => 'poktan_2',
            'password' => bcrypt('password'),
            'desa_id' => 78,
            'no_reg' => 'PK09812898',
            'nama' => 'Poktan Jember 2',
            'alamat' => 'Kecamatan Sumbersari, Kabupaten Jember',
            'jml_anggota' => 20,
            'no_telpon' => '1123'
        ]);
        User::create([
            'username' => 'bpp_pancakarya',
            'password' => bcrypt('password'),
            'desa_id' => 11,
            'no_reg' => 'BPP0956743',
            'nama' => 'BPP Jember 1',
            'alamat' => 'Jl. Raya Pancakarya No. 25',
            'no_telpon' => '81234567890'
        ]);
        User::create([
            'username' => 'bpp_sumbersari',
            'password' => bcrypt('password'),
            'desa_id' => 78,
            'no_reg' => 'BPP0956744',
            'nama' => 'BPP Jember 2',
            'alamat' => 'Jl. Jawa No. 10',
            'no_telpon' => '81234567899'
        ]);
        User::create([
            'username' => 'dinas_jember',
            'password' => bcrypt('password'),
            'desa_id' => 11,
            'no_reg' => 'DN09768974',
            'nama' => 'Dinas Pertanian',
            'alamat' => 'Jl. Panglima Sudirman No. 10, Kaliwates, Jember',
            'no_telpon' => '0331-123456'
        ]);
    }
}
