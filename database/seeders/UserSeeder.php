<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Mahafuzur',
            'email' => 'mahafuzur@gmail.com',
            'password' => bcrypt('123456789'),
            'role_id' => 1
        ]);
        \App\Models\User::factory(5)->create();
    }
}
