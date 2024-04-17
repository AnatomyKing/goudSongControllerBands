<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Song;

class SongsTableSeeder extends Seeder
{
    public function run()
    {
        $songs = [
            [
                'title' => 'mercykiller',
                'singer' => 'iRis.EXE',
            ],
            [
                'title' => 'Pretty Boy',
                'singer' => 'poutyface',
            ],
            [
                'title' => 'Fall',
                'singer' => 'ALTER.FOUR',
            ],
            [
                'title' => 'BORED!(feat. phem)',
                'singer' => 'poutyface, phem',
            ],
            [
                'title' => 'Hot',
                'singer' => 'Confetti',
            ],
        ];

        foreach ($songs as $songData) {
            Song::create($songData);
        }
    }
}