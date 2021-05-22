<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;


    public function adresse()
    {
        return $this->hasOne(Adresse::class);
    }
    public function identite()
    {
        return $this->hasOne(Identite::class);
    }
    public function residence()
    {
        return $this->hasOne(InfoResidence::class);
    }
    public function finance()
    {
        return $this->hasOne(InfoFinanciere::class);
    }
    public function professionnel()
    {
        return $this->hasOne(Professionnel::class);
    }
    public function relation()
    {
        return $this->hasOne(Relation::class);
    }
    public function audit()
    {
        return $this->hasOne(Audit::class);
    }
    public function supplementaire()
    {
        return $this->hasOne(Supplementaire::class);
    }
    public function details()
    {
        return $this->hasOne(AutreDetail::class);
    }
    public function connaissance()
    {
        return $this->hasOne(Connaissance::class);
    }

    public function agence()
    {
        return $this->belongsTo(Agence::class);
    }
}
