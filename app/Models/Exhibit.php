<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exhibit extends Model
{
    protected $fillable = ['title', 'description', 'image_url'];

    public function translations()
    {
        return $this->hasMany(Translation::class);
    }

    public function audioFiles()
    {
        return $this->hasMany(AudioFile::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
}
