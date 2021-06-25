<?php

namespace App\Http\Controllers;

use App\Models\Vacante;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Experiencia;
use App\Models\Ubicacion;
use App\Models\Salario;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class VacanteController extends Controller
{

    public function  __construct()
    {
        // revisar que el usuario este autenticado y verificado 

        // $this->middleware(['auth', 'verified']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        return view('vacantes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Consultas 
        $categorias = Categoria::all();
        $experiencias = Experiencia::all();
        $ubicacions = Ubicacion::all();
        $salarios = Salario::all();

        return view('vacantes.create')->with(['categorias' => $categorias, 'experiencias' => $experiencias, 'ubicacions' => $ubicacions, 'salarios' => $salarios]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Validacion
        $data = $request->validate([
            'titulo' => 'required|min:6',
            
        ]);

        return ("Desde store");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function show(Vacante $vacante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacante $vacante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacante $vacante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacante $vacante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function imagen(Request $request)
    {

        $imagen = $request->file('file');
        
        $nombreImagen = time() . '.'.$imagen->extension();

        $imagen->move(public_path('storage/vacantes'), $nombreImagen);

        //Se usa para obtener la extension del archivo ejemplo: png, jpg, txt, pdf, etc;
        return response()->json(['correcto' => $nombreImagen]);
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function borrarimagen(Request $request)
    {

        if($request->ajax()){
            $imagen = $request->get('imagen');


            if(File::exists( 'storage/vacantes/'.$imagen )){
               File::delete( 'storage/vacantes/'.$imagen );
            }

            return response('Imagen Eliminada', 200);
        }
    }
}
