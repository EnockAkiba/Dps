<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CentreSante;

class ZoneSante extends Model
{
    use HasFactory;

    protected $fillable=['designation','adresse'];

    public function centreSante(){
        return $this->hasMany(CentreSante::class);
    }
}
