<?php

namespace Database\Seeders;

use App\Models\Songs;   
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Songs::create([
            'name'=> 'I Want To Break Free',
            'description' => 'Song made by Queen',
            'duration' => 3,
            'genres_id' => 1,
        ]) ;

        Songs::factory()->count(10)->create();
    }
}
