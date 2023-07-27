<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newcase extends Model
{
    use HasFactory;

    public function alertes(){
        return $this->hasMany(Alerte::class);
    }

    public function epidemie(){
        return $this->belongsTo(Epidemie::class);
    }
}
