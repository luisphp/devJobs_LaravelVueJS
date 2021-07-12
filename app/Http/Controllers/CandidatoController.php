<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Candidato;
use App\Models\Vacante;
use App\Notifications\NuevoCandidato;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        

        //Obtener el id actual

        $id_vacante = $request['vacante'];

        //Obtener los candidatos y la vacante
        $vacante = Vacante::findOrFail( $id_vacante );

        // Solo el autor de la vacante podra ver a los candidatos de la misma
        $this->authorize('view', $vacante);

        // dd($vacante->candidatos);


        return view('candidatos.index')->with(['vacante' => $vacante]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validar datos
        $data = $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'cv' => 'required|mimes:pdf|max:1000',
            'vacante_id' => 'required'

        ]);

        //Almacenar archivo PDF
        if($request->file('cv')){
            $archivo = $request->file('cv');
            $nombre_archivo = time() . "." .$request->file('cv')->extension();
            $ubicacion = public_path('/storage/cv');
            $archivo->move($ubicacion, $nombre_archivo );

            // return $nombre_archivo;
        }

        // Guardar el candiato en la DB
        $vacante = Vacante::find($data['vacante_id']);

        $vacante->candidatos()->create([
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'cv' => $nombre_archivo
        ]);

        //Enviar una notificacion al reclutador de que le llego un nuevo candidato
        $reclutador = $vacante->reclutador;
        $reclutador->notify( new NuevoCandidato( $vacante->titulo, $vacante->id ) );

        // Regresamos a la vacante con un mensaje de aviso al usuario
        return back()->with('estado', 'Tus datos se enviaron correctamente!');

        // Una forma
        // $candidato = new Candidato();
        // $candidato->nombre = $data['nombre'];
        // $candidato->email = $data['email'];
        // $candidato->vacante_id = $data['vacante_id'];
        // $candidato->save();

        // Segunda forma Fillable
        // $candidato = new Candidato($data);
        // $candidato->save();

        // Tercera forma
        // $candidato = new Candidato();
        // $candidato->fill($data);
        // $candidato->cv = '123pdf';
        // $candidato->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
