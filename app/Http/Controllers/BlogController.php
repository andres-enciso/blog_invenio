<?php

namespace App\Http\Controllers;

use App\Models\EntradasModel;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $vars = [
            "entradas" => EntradasModel::getEntradas(),
        ];

        return view('listado', $vars);
    }

    public function form(Request $request)
    {
        $vars = [];

        $type = $request->any;

        if ($type == 'nuevo') {
        } else {
            $vars += [
                "entrada" => EntradasModel::getEntrada($type)
            ];
        }
        //dd($vars);
        return view('form', $vars);
    }

    public function postEntrada(Request $request)
    {
        $band = EntradasModel::postEntrada($request);

        if ($band) {
            return redirect()->route('form', ['any' => $band])->with('success', 'Entrada creada correctamente');
        } else {
            return redirect()->route('form')->with('danger', 'Error al crear la entrada');
        }
    }

    public function updateEntrada(Request $request)
    {
        $band = EntradasModel::updateEntrada($request);

        if ($band) {
            return redirect()->route('form', ['any' => $request->input('id')])->with('info', 'Entrada actualizada correctamente');
        } else {
            return redirect()->route('form')->with('danger', 'Error al crear editar entrada');
        }
    }

    public function searchEntradas(Request $request)
    {
        $band = EntradasModel::searchEntradas($request);

        return view('listado', ['entradas' => $band]);
    }
}

