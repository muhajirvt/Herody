<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Admin',
            'unique_id' => (string) Str::uuid(),
            'email'     => 'admin@email.com',
            'is_admin'  => 1,
            'password'  => Hash::make('123456')
        ]);
    }
}
