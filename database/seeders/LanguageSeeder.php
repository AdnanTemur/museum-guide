<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguageSeeder extends Seeder
{
    public function run()
    {
        Language::create(['language_code' => 'en', 'language_name' => 'English']);
        Language::create(['language_code' => 'es', 'language_name' => 'Spanish']);
        Language::create(['language_code' => 'fr', 'language_name' => 'French']);
        Language::create(['language_code' => 'de', 'language_name' => 'German']);
        Language::create(['language_code' => 'zh', 'language_name' => 'Chinese']);
    }
}


