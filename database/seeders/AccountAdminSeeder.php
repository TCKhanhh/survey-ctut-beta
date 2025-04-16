<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class AccountAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'ho_ten' => 'Admin CTUT',
            'email' => 'admin@ctut.edu.vn',
            'email_verified_at' => now(),
            'mat_khau' => Hash::make('12345678'), // Mật khẩu đã mã hóa
            'sdt' => '0123456789',
            'dia_chi' => 'Cần Thơ',
            'quyen_truy_cap' => 1, // 1: Admin
            'remember_token' => \Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}