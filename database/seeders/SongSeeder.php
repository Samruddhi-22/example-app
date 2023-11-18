<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;
class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        // Seed a few songs
        Song::create([
            'artist' => 'Eminem',
            'title' => 'Stan',
        ]);

        Song::create([
            'artist' => 'A P Dhillon',
            'title' => 'With You',
        ]);

    }
}
