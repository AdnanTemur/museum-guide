<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $fillable = ['exhibit_id', 'language_id', 'translated_title', 'translated_description'];

    public function exhibit()
    {
        return $this->belongsTo(Exhibit::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
