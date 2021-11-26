<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Personal;
use App\Models\EstadoRequerimiento;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function index()
{
    $usuarios= Usuario::all();
    return $usuarios;
    
}

public function log(Request $request)
{
    $user= Usuario::firstWhere('nombre_usuario',$request->nombre_usuario);
    if(!$user){
        return response()->json([
            'data' => null,
                'msg' => [
                    'summary' => 'usuario no encontrado',
                ]], 401);
    }
    $validar = Hash::check($request->clave,$user->clave);
    if(!$validar){
        return response()->json([
            'data' => null,
                'msg' => [
                    'summary' => 'Contraseña incorrecta',
                ]], 401);
    }else{
        $personal= $user->personal()->first();
        return $personal->requerimientos()->with(['estadoRequerimientos' =>function($query){
            $query->with('estado');
        }])->get();
    }
}


/*public function verReq(Request $request){
    
    $user= Usuario::firstWhere('nombre_usuario',$request->nombre_usuario);
    $personal= $user->personal()->first();
    return $personal->requerimientos()->with(['estadoRequerimientos' =>function($query){
        $query->with('estado');
    }])->get();
}*/

public function crear(Request $request){
    //  return $request->all();
    $nuevoreq = new EstadoRequerimiento;
    $nuevoreq->id = $request->id;
    $nuevoreq->id_req_perso = $request->id_req_perso;
    $nuevoreq->id_estado = $request->id_estado;
    $nuevoreq->fecha_asig = $request->fecha_asig;
    $nuevoreq->f_fin = $request->f_fin;
    $nuevoreq->path = $request->path;

    $nuevoreq->save();

    return $nuevoreq;
}
}