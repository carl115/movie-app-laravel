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
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWPcBYzf3x5iMzU-HvziAwbBWbrmTAxh5k8ErcNQSQisj73lc0',
            'video' => 'https://www.youtube.com/embed/KH_lyU4vJn8',
            'title' => 'Misión imposible III',
            'synopsis' => 'La película empieza con Ethan Hunt (Tom Cruise) esposado en una silla y al frente de él se encuentra Julia (Michelle Monaghan) también esposada y con la boca tapada. Owen Davian (Philip Seymour Hoffman) le dice que contará hasta diez y matará a Julia si no le dice dónde está la pata de conejo. Luego de discutir aparentemente le dispara en la cabeza. La secuencia cambia a una fiesta donde Ethan se compromete con Julia y él habla con varios invitados y les dice que trabaja en una empresa de transporte. En medio de la fiesta recibe una llamada de Musgrave (Billy Crudup) donde le pide ayuda para rescatar una agente que desapareció en Alemania. Ethan tira intencionadamente una cubeta con hielo y dice que va a salir a comprar más, al llegar a un supermercado se reúne con Musgrave. Luego de hablar un momento, Musgrave le dice que le envíe fotos de la boda tocando una cámara fotográfica. Ethan toma la cámara y se va. La cámara contenía información detallada de la operación y el nombre de la agente Lindsey Farris (Keri Russell).',
            'premiere_date' => '2006-05-05',
            'category_id' => 1
        ]);

        Star::create([
            'points' => 4,
            'movie_id' => 1,
            'user_id' => 1,
        ]);
    }
}
