<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AudioFile;

class AudioFileSeeder extends Seeder
{
    public function run()
    {
        AudioFile::create([
            'exhibit_id' => 1,
            'language_id' => 1, // English
            'audio_url' => 'https://example.com/audio/artifacts_en.mp3',
        ]);

        AudioFile::create([
            'exhibit_id' => 1,
            'language_id' => 2, // Spanish
            'audio_url' => 'https://example.com/audio/artifacts_es.mp3',
        ]);

        AudioFile::create([
            'exhibit_id' => 2,
            'language_id' => 1, // English
            'audio_url' => 'https://example.com/audio/paintings_en.mp3',
        ]);

        // Add more audio files as needed
    }
}

