
@extends('layouts.app')

@section('navegacion')
    @include('ui.adminnav')
@endsection

@section('content')
    <h1 class="text-2xl text-center mt-10 "> Candidatos de la vacante: {{ $vacante->titulo }} </h1>

    @if( count($vacante->candidatos) > 0 )
    <ul class="max-w-md mx-auto mt-10">
    @foreach ($vacante->candidatos as $candidato)
{{-- 
        @php
            $data = $notificacion->data
        @endphp --}}

        <li class="p-5 border border-gray-400 mb-5"> 

            <p class="mb-4 ">
                Nombre de candidato: <span class="font-bold"> {{ $candidato->nombre }} </span>
            </p>
            <p class="mb-4 ">
                Email del candidato: <span class="font-bold"> {{ $candidato->email }} </span>
            </p>
            <a href="../storage/cv/{{$candidato->cv}}" target="new" class="bg-green-400 p-3 inline-block font-bold uppercase text-xs text-white">ver CV</a>
        <li>
    @endforeach
        </ul>
    @else
        <p class="text-center mt-5"> Aún no hay candidatos para esta vacante... </p>

    @endif

@endsection


