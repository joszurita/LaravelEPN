<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Requerimiento extends Model
{
    protected $connection = 'desarrollo';

    use HasFactory;
    protected $table = 'Desarrollo.requerimiento';
    
    public function detalleRequerimientos(){
        return $this->hasMany(DetalleRequerimiento::class,'id_req','id');
    }
    public function personal(){
        return $this->hasMany(RequerimientoPersona::class,'id_req','id');
    }
}
