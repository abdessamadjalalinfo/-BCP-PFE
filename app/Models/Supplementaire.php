<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplementaire extends Model
{
    use HasFactory;
    public function Client()
    {
        return $this->belongsTo(Client::class);
    }
}
