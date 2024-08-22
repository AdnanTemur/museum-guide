<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Translation;

class TranslationSeeder extends Seeder
{
    public function run()
    {
        Translation::create([
            'exhibit_id' => 1,
            'language_id' => 2, // Spanish
            'translated_title' => 'Artefactos Antiguos',
            'translated_description' => 'Una colección de artefactos antiguos de varias culturas.',
        ]);

        Translation::create([
            'exhibit_id' => 2,
            'language_id' => 2, // Spanish
            'translated_title' => 'Pinturas del Renacimiento',
            'translated_description' => 'Pinturas famosas del periodo del Renacimiento.',
        ]);

        Translation::create([
            'exhibit_id' => 3,
            'language_id' => 2, // Spanish
            'translated_title' => 'Esculturas Modernas',
            'translated_description' => 'Esculturas de artistas modernos.',
        ]);

        // Add more translations as needed
    }
}
