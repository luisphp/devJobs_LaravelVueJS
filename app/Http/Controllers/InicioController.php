<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacante;
use App\Models\Ubicacion;


class InicioController extends Controller
{
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

            $vacantes = Vacante::latest()->where('activa',1)->take(10)->get();
            $ubicaciones = Ubicacion::all();

        return view('inicio.index')->with(['vacantes'=> $vacantes, 'ubicacions' => $ubicaciones]);
    }
}
