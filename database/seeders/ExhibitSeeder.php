<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exhibit;

class ExhibitSeeder extends Seeder
{
    public function run()
    {
        Exhibit::create([
            'title' => 'Ancient Artifacts',
            'description' => 'A collection of ancient artifacts from various cultures.',
            'image_url' => 'https://example.com/images/artifacts.jpg',
        ]);

        Exhibit::create([
            'title' => 'Renaissance Paintings',
            'description' => 'Famous paintings from the Renaissance period.',
            'image_url' => 'https://example.com/images/paintings.jpg',
        ]);

        Exhibit::create([
            'title' => 'Modern Sculptures',
            'description' => 'Sculptures by modern artists.',
            'image_url' => 'https://example.com/images/sculptures.jpg',
        ]);
    }
}

