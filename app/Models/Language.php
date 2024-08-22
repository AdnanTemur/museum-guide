<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = ['language_code', 'language_name'];

    public function translations()
    {
        return $this->hasMany(Translation::class);
    }

    public function audioFiles()
    {
        return $this->hasMany(AudioFile::class);
    }
}
