<?php

namespace Database\Seeders;
use App\Models\Genres;   
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   

        Genres::create([
            'name'=> 'Rock',
        ]) ;
        Genres::create([
            'name'=> 'Pop',
        ]) ;
        Genres::create([
            'name'=> 'Classic',
        ]) ;
        Genres::create([
            'name'=> 'Jazz',
        ]) ;
        Genres::create([
            'name'=> 'Rap',
        ]) ;
        
        //Genres::factory()->count(10)->create();
    }
}
