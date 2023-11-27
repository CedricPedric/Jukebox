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
            'name' => 'Jeroen',
            'email' => 'JeroensEmail@email.com',
            'password' => 'Password123', // password
        ]) ;

        User::factory()->count(10)->create();
    }
}
