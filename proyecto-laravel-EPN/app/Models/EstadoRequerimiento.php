<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoRequerimiento extends Model
{
    protected $connection = 'desarrollo';

    use HasFactory;
    protected $table = 'Desarrollo.estado_req';
    protected $fillable = [
        'id', 
        'id_req_perso', 
        'id_estado',
        'fecha_asig',
        'f_fin',
        'path',
    ];

    public function estado(){ 
        return $this->belongsTo(Estado::class,'id_estado','id');
    }
}
