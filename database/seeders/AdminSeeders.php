<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'nama'      => 'Administrator',
            'username'  => 'admin',
            'role'      => 'admin',
            'password' => bcrypt('123'),
        ]);
        Admin::create([
            'nama'      => 'Resepsionis',
            'username'  => 'resepsionis',
            'role'      => 'resepsionis',
            'password' => bcrypt('1234'),
        ]);
        Admin::create([
            'nama'      => 'Rina',
            'username'  => 'rina',
            'role'      => 'resepsionis',
            'password' => bcrypt('1608'),
        ]);
    }
}
