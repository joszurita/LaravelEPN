<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleRequerimiento extends Model
{
    use HasFactory;
    protected $connection = 'desarrollo';

    protected $table = 'Desarrollo.detalle_requerimiento';
    public $fillable = [
        'nombres',
        'apellidos',
        'nced',
        'area',
        'activo',
    ];
}
