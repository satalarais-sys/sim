<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $email = env('SIM_ADMIN_EMAIL', 'admin@sim.local');
        $password = env('SIM_ADMIN_PASSWORD', 'Password123!');

        $user = User::firstOrCreate([
            'email' => $email,
        ], [
            'name' => 'Super Admin',
            'password' => Hash::make($password),
        ]);

        if (method_exists($user, 'assignRole')) {
            $user->assignRole('super-admin');
        }
    }
}
