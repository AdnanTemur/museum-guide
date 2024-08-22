<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AudioFile extends Model
{
    protected $fillable = ['exhibit_id', 'language_id', 'audio_url'];

    public function exhibit()
    {
        return $this->belongsTo(Exhibit::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
