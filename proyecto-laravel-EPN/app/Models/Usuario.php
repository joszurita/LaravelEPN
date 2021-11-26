<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $connection = 'pgsql';
    
    public $table ='public.usuario';
    protected $primaryKey = 'id_usuario';
        public $fillable = [
        'nombre_usuario',
        'clave',
        'cedula',
    ];

    public function personal(){
        return $this->hasOne(Personal::class,'nced','cedula');
    }
}

