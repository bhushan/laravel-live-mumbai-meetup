<?php

namespace App\Models;

use App\Models\Traits\Cacheable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory, Cacheable;

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
