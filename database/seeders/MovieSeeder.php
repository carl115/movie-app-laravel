<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Star;
use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        Movie::create([
            'title' => 'Lorem insut dolor',
            'synopsis' => 'lorem insut dolor, tras',
            'premiere_date' => '2012-04-03'
        ]);

        Star::create([
            'points' => 2,
            'movie_id' => 1,
            'user_id' => 1,
        ]);

        Video::create([
            'uri' => 'http://the-movie-video.com',
            'movie_id' => 1,
        ]);
    }
}
