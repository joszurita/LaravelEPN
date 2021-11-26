<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequerimientoPersona extends Model
{
    protected $connection = 'desarrollo';

    use HasFactory;
    protected $table = 'Desarrollo.req_persona';


    public function estadoRequerimientos(){
        return $this->hasMany(EstadoRequerimiento::class,'id_req_perso','id');
    }
}
