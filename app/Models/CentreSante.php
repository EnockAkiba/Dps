<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ZoneSante;


class CentreSante extends Model
{
    use HasFactory;
    protected $fillable=['designation','adresse','zone_santes_id'];

    public function zone_santes(){
        
        return $this->belongsTo(ZoneSante::class);
    }
}
