<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    public function rLanguage()
    {
        return $this->belongsTo(Language::class, 'language_id');
    }
}
