<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        tap(
            User::factory()
                ->state([
                    'email' => 'admin@admin.com',
                    'name' => 'Admin',
                    'password' => Hash::make('password'),
                ])
                ->create(),
            function (User $user) {
                $user->assignRole('Super Admin');
            });
    }
}
