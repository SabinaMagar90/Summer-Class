<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
    // Movie::create([
    // 'name' => 'Inception',
    // 'description' => 'A mind-bending thriller by Christopher Nolan.',
    // 'duration' => 2.28,
    // 'release_date' => '2010-07-16',
    // 'rating' => 8.8,
    // 'genre_id' => 1, // assuming 1 = Action
    // 'language' => 'English',
    // 'cast' => 'Leonardo DiCaprio, Joseph Gordon-Levitt, Ellen Page'
    // ]);

    // Movie::create([
    // 'name' => 'The Hangover',
    // 'description' => 'A comedy about a bachelor party gone wrong.',
    // 'duration' => 1.40,
    // 'release_date' => '2009-06-05',
    // 'rating' => 7.7,
    // 'genre_id' => 2, // assuming 2 = Comedy
    // 'language' => 'English',
    // 'cast' => 'Bradley Cooper, Ed Helms, Zach Galifianakis'
    // ]);

    // Movie::create([
    // 'name' => 'Parasite',
    // 'description' => 'A dark comedy thriller from South Korea.',
    // 'duration' => 2.12,
    // 'release_date' => '2019-05-30',
    // 'rating' => 8.6,
    // 'genre_id' => 2, // assuming genre Comedy is ID 2
    // 'language' => 'Korean',
    // 'cast' => 'Song Kang-ho, Lee Sun-kyun, Cho Yeo-jeong'
    // ]);

    Movie::create([
        'name' => 'Inception',
        'description' => 'A mind-bending thriller about dreams within dreams.',
        'duration' => 2.28,
        'release_date' => '2010-07-16',
        'rating' => 8.8,
        'genre_id' => 5, // Sci-Fi
        'language' => 'English',
        'cast' => 'Leonardo DiCaprio, Joseph Gordon-Levitt, Ellen Page'
    ]);

    Movie::create([
        'name' => 'The Conjuring',
        'description' => 'Paranormal investigators help a family terrorized by a dark presence.',
        'duration' => 1.52,
        'release_date' => '2013-07-19',
        'rating' => 7.5,
        'genre_id' => 4, // Horror
        'language' => 'English',
        'cast' => 'Patrick Wilson, Vera Farmiga, Lili Taylor'
    ]);

    Movie::create([
        'name' => 'The Notebook',
        'description' => 'A romantic drama spanning decades.',
        'duration' => 2.03,
        'release_date' => '2004-06-25',
        'rating' => 7.8,
        'genre_id' => 5, // Romance
        'language' => 'English',
        'cast' => 'Ryan Gosling, Rachel McAdams'
    ]);

    Movie::create([
        'name' => 'Avengers: Endgame',
        'description' => 'The epic conclusion to the Infinity Saga.',
        'duration' => 3.02,
        'release_date' => '2019-04-26',
        'rating' => 8.4,
        'genre_id' => 1, // Action
        'language' => 'English',
        'cast' => 'Robert Downey Jr., Chris Evans, Scarlett Johansson'
    ]);

    Movie::create([
        'name' => 'Interstellar',
        'description' => 'A team of explorers travels through a wormhole in space.',
        'duration' => 2.49,
        'release_date' => '2014-11-07',
        'rating' => 8.6,
        'genre_id' => 5, // Sci-Fi
        'language' => 'English',
        'cast' => 'Matthew McConaughey, Anne Hathaway, Jessica Chastain'
    ]);

    Movie::create([
        'name' => 'Your Name',
        'description' => 'A romantic fantasy anime about two strangers connected by dreams.',
        'duration' => 1.52,
        'release_date' => '2016-08-26',
        'rating' => 8.4,
        'genre_id' => 6, // Fantasy
        'language' => 'Japanese',
        'cast' => 'Ryunosuke Kamiki, Mone Kamishiraishi'
    ]);

    Movie::create([
        'name' => 'The Godfather',
        'description' => 'The aging patriarch of an organized crime dynasty.',
        'duration' => 2.55,
        'release_date' => '1972-03-24',
        'rating' => 9.2,
        'genre_id' => 3, // Drama
        'language' => 'English',
        'cast' => 'Marlon Brando, Al Pacino, James Caan'
    ]);

    Movie::create([
        'name' => 'Finding Nemo',
        'description' => 'An animated underwater adventure to find a lost fish.',
        'duration' => 1.40,
        'release_date' => '2003-05-30',
        'rating' => 8.1,
        'genre_id' => 9, // Animation
        'language' => 'English',
        'cast' => 'Albert Brooks, Ellen DeGeneres, Alexander Gould'
    ]);

    Movie::create([
        'name' => 'The Social Dilemma',
        'description' => 'A documentary about how social media controls our attention.',
        'duration' => 1.34,
        'release_date' => '2020-01-26',
        'rating' => 7.6,
        'genre_id' => 10, // Documentary
        'language' => 'English',
        'cast' => 'Tristan Harris, Jaron Lanier'
    ]);


    }
}
