<?php

namespace App\Models;

use App\Models\Traits\Cacheable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory, Cacheable;

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
