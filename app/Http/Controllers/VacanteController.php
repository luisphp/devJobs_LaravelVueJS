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

    // public function  __construct()
    // {
    //     // revisar que el usuario este autenticado y verificado 

    //     $this->middleware(['auth', 'verified']);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $vacantes = auth()->user()->vacantes();

        $vacantes = Vacante::where('user_id', auth()->user()->id)->simplePaginate(10); 
        
        // dd($vacantes);
        return view('vacantes.index', compact('vacantes'));
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
            'categoria' => 'required',
            'ubicacion' => 'required',
            'experiencia' => 'required',
            'salario' => 'required',
            'descripcion' => 'required|min:30',
            'imagen' => 'required',
            'skills' => 'required'
            
        ]);

        // dd($data);


        auth()->user()->vacantes()->create([
            'titulo' => $data['titulo'],
            'imagen' => $data['imagen'],
            'descripcion' => $data['descripcion'],
            'skills' => $data['skills'],
            'categoria_id' => $data['categoria'],
            'experiencia_id' => $data['experiencia'],
            'ubicacion_id' => $data['ubicacion'],
            'salario_id' => $data['salario'],

        ]);

        return redirect()->route('vacantes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function show(Vacante $vacante)
    {

        // $vacante_seleccionada = Vacante::where('id', $vacante->id );

        return view('vacantes.show')->with(['vacante' => $vacante]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacante  $vacante
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacante $vacante)
    {

        //Consultas 
        $categorias = Categoria::all();
        $experiencias = Experiencia::all();
        $ubicacions = Ubicacion::all();
        $salarios = Salario::all();

        return view('vacantes.edit')->with(['categorias' => $categorias, 'experiencias' => $experiencias, 'ubicacions' => $ubicacions, 'salarios' => $salarios]);
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
    public function destroy(Request $request, Vacante $vacante)
    {
        $vacante->delete();

        return response()->json(['mensaje' => 'Se elimino la vacante correctamente: '.$vacante->titulo]);
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

            $imagen = $request->get('imagen');
            // dd('Nombre de la imagen es: '.$imagen);

            if(File::exists( './storage/vacantes/'.$imagen )){
               File::delete( './storage/vacantes/'.$imagen );
            //    return response()->json(['message' => 'Se borro la imagen', 'status' => 200]);
                return response('Borrado', 200);
            }else{
                // return response()->json(['message' => 'No borrado', 'status' => 200]);
                return response('No borrado', 200);
            }

    }

    /**
     * Cambia el estado de una vacante
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cambiarEstadoVacante(Request $request, Vacante $vacante)
    {

        //Leer nuevo estado, asignarlo y guardarlo en la DB
        $vacante->activa = $request->estado;
        $vacante->save();

          return response()->json(['respuesta' => 'Se hizo el cambio correctamente en la vacante: '.$vacante->titulo]);

    }
}
