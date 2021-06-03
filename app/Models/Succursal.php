<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Succursal extends Model
{
    use HasFactory;
    public function bpr()
    {
        return $this->belongsTo(Bpr::class);
    }
    public function agences()
    {
        return $this->hasMany(Agence::class);
    }
}
