<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['exhibit_id', 'full_name', 'email', 'comment', 'rating'];

    public function exhibit()
    {
        return $this->belongsTo(Exhibit::class);
    }
}
