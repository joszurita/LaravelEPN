<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
         /**
     * The database connection used by the model.
     *
     * @var string
     */
    protected $connection = 'desarrollo';

    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'Desarrollo.personal';

    public function requerimientos(){
        return $this->hasMany(RequerimientoPersona::class,'id_perso','id');
    }
}
