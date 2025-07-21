<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Action',
            'description' => 'Action'
        ]);
        
         Genre::create([
            'name' => 'Comedy',
            'description' => 'Comedy'
        ]);

        Genre::create([
            'name' => 'Drama',
            'description' => 'Dramatic storytelling with emotional themes'
        ]);

        Genre::create([
            'name' => 'Horror',
            'description' => 'Scary and suspenseful content intended to frighten'
        ]);

        Genre::create([
            'name' => 'Romance',
            'description' => 'Love stories with emotional connections'
        ]);

        Genre::create([
            'name' => 'Sci-Fi',
            'description' => 'Science fiction with futuristic or scientific elements'
        ]);

        Genre::create([
            'name' => 'Fantasy',
            'description' => 'Magical and supernatural themes in fictional worlds'
        ]);

        Genre::create([
            'name' => 'Thriller',
            'description' => 'Intense, suspenseful plots with twists'
        ]);

        Genre::create([
            'name' => 'Mystery',
            'description' => 'Stories focused on solving a crime or puzzle'
        ]);

        Genre::create([
            'name' => 'Adventure',
            'description' => 'Exciting journeys and daring experiences'
        ]);

        Genre::create([
            'name' => 'Animation',
            'description' => 'Animated films typically for all ages'
        ]);

        Genre::create([
            'name' => 'Documentary',
            'description' => 'Non-fiction films based on real events or people'
        ]);


    }
}
