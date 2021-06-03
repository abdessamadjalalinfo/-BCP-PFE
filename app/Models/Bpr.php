<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bpr extends Model
{
    use HasFactory;
    public function succursals()
    {
        return $this->hasMany(Succursal::class);
    }
}
