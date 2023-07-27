<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Epidemie;

class Deces extends Model
{
    use HasFactory;
    protected $fillable=['epidemie_id','trancheAge'];

    public function epidemie(){
        return $this->belongsTo(Epidemie::class);
    }
}
