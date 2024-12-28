<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengguna =  User::create([
            'name' => 'pengguna',
            'email' => 'pengguna@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        $RolePengguna = Role::create(['name' => 'pengguna']);
        $pengguna->assignRole($RolePengguna);

        $admin =  User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        $RoleAdmin = Role::create(['name' => 'admin']);
        $admin->assignRole($RoleAdmin);
    }
}
