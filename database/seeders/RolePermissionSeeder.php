<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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
            'hapus-pengajuan',
            'create-akun',
            'view-akun',
            'update-akun',
            'view-bantuan',
            'edit-bantuan',
            'hapus-bantuan'
        ];

        foreach($permissions as $permission) {
            Permission::create(['name' => $permission ]);
        }

        $permissionPoktan = [
            'view-pengajuan',
            'create-pengajuan',
            'edit-pengajuan',
            'view-akun',
            'update-akun',
            'view-bantuan',
        ];

        foreach($permissionPoktan as $permPoktan) {
            $poktan->givePermissionTo($permPoktan);
        }

        $permissionBpp = [
            'view-pengajuan',
            'edit-pengajuan',
            'view-akun',
            'update-akun',
            'view-bantuan',
            'edit-bantuan',
            'hapus-bantuan'
        ];

        foreach($permissionBpp as $permBpp) {
            $bpp->givePermissionTo($permBpp);
        }

        $permissionDinas = [
            'view-pengajuan',
            'edit-pengajuan',
            'view-akun',
            'create-akun',
            'update-akun',
        ];

        foreach($permissionDinas as $permDinas) {
            $dinas->givePermissionTo($permDinas);
        }

        $petani1 = User::find(1);
        $petani1->assignRole('poktan');

        $petani2 = User::find(2);
        $petani2->assignRole('poktan');

        $penyuluh = User::find(3);
        $penyuluh->assignRole('bpp');

        $dinas_pertanian = User::find(4);
        $dinas_pertanian->assignRole('dinas');
    }
}
