<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $password = Hash::make('password');

        // 5 akun petugas dummy dengan nama Indonesia.
        for ($i = 1; $i <= 5; $i++) {
            DB::table('users')->updateOrInsert(
                ['email' => "petugas{$i}@laporbanjir.test"],
                [
                    'name' => $faker->name,
                    'password' => $password,
                    'email_verified_at' => now(),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }

        // 1 akun admin BPBD dengan email dan password tetap.
        DB::table('users')->updateOrInsert(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin BPBD Kabupaten Bandung',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        $this->command->info('PetugasSeeder: 5 akun petugas dummy dan 1 akun admin berhasil dibuat.');
        $this->command->line('Akun petugas: petugas1@laporbanjir.test s.d. petugas5@laporbanjir.test (password: password)');
        $this->command->line('Akun admin: admin@example.com (password: admin123)');
    }
}
