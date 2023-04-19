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
            'image' => 'https://misionimposibleimage.com',
            'video' => 'https://misionimposiblevideo.com',
            'title' => 'Mision imposible 3',
            'synopsis' => 'Es una mision que consiste en...',
            'premiere_date' => '2012-04-03',
            'category_id' => 1
        ]);

        Star::create([
            'points' => 4,
            'movie_id' => 1,
            'user_id' => 1,
        ]);
    }
}
