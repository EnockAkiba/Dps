<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Deces;

class Epidemie extends Model
{
    use HasFactory;

    protected $fillable=['designation','description'];
    
    public function nouveau_cas(){
        return $this->hasOne(nouveau_cas::class);
    }

    public function deces(){
        return $this->hasMeny(Deces::class);
    }
}
