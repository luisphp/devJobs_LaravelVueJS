@extends('layouts.app')

@section('content')
    <h1 class="mb-3">Todas las respuestas</h1>

    @for ($i = 0; $i < sizeof($intentos); $i++)
         <p> {{$i}} )- Token: {{ $intentos[$i] }}</p>
    @endfor
    
    

    {{-- @foreach ($respuestas as $respuesta)
    <div class="mt-3">
        <p> about : {{ $respuesta->about }} </p>
        <p> workflow_id: {{ $respuesta->workflow_id }} </p>
        <p> owner_id: {{ $respuesta->owner_id	 }} </p>
        <p> deployment_id: {{ $respuesta->deployment_id	 }} </p>
        <p> created_at: {{ $respuesta->created_at	 }} </p>
    </div>
    @endforeach --}}


@endsection

