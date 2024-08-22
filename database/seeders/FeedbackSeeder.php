<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feedback;

class FeedbackSeeder extends Seeder
{
    public function run()
    {
        Feedback::create([
            'exhibit_id' => 1,
            'full_name' => 'John Doe',
            'email' => 'john@example.com',
            'comment' => 'Amazing collection of artifacts!',
            'rating' => 5,
        ]);

        Feedback::create([
            'exhibit_id' => 2,
            'full_name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'comment' => 'Loved the Renaissance paintings.',
            'rating' => 4,
        ]);

        // Add more feedback entries as needed
    }
}

