<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class EntradasModel extends Model
{

    use HasFactory;

    public static function getEntradas()
    {
        return DB::table('entradas')->get();
    }
    public static function getEntrada($id)
    {
        return DB::table('entradas')->where('id', $id)->first();
    }

    public static function postEntrada($request)
    {
        return DB::table('entradas')->insertGetId([
            'titulo'     => $request->titulo,
            'contenido'  => $request->contenido,
            'tipo'       => json_encode($request->tipo),
            'fecha_publicacion' => date('Y-m-d H:i:s'),
            'autor'      => session('user'),
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }

    public static function updateEntrada($request)
    {
        return DB::table('entradas')->where('id', $request->id)->update([
            'titulo'     => $request->titulo,
            'contenido'  => $request->contenido,
            'tipo'       => json_encode($request->tipo),
            'fecha_publicacion' => date('Y-m-d H:i:s'),
            'autor'      => session('user'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }

    public static function searchEntradas($request)
    {

        // Lógica para obtener las entradas según la búsqueda
        return DB::table('entradas')
            ->where('titulo', 'like', "%$request->busqueda%")
            ->orWhere('contenido', 'like', "%$request->busqueda%")
            ->orWhere('tipo', 'like', "%$request->busqueda%")
            ->orWhere('autor', 'like', "%$request->busqueda%")
            ->get();
    }
}
