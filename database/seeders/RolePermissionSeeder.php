<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $poktan = Role::create(['name' => 'poktan']);
        $bpp = Role::create(['name' => 'bpp']);
        $dinas = Role::create(['name' => 'dinas']);

        $permissions = [
            'view-pengajuan',
            'create-pengajuan',
            'edit-pengajuan',
            'create-akun',
            'view-profil',
            'update-profil',
            'view-bantuan',
            'edit-bantuan',
            'hapus-bantuan'
        ];
    }
}
