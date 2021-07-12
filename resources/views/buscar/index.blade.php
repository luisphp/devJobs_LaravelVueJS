@extends('layouts.app')

@section('navegacion')

    @include('ui.categoriasNav')
    
@endsection

@section('content')

    <h1 class="text-2xl text-center mt-10">Resultados de tu busqueda</h1>

    <div class="my-10 bg-gray-100 p-10 shadow">

        <ul class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach ($vacantes as $vacante)
                <li class="p-10 border border-gray-300 bg-white shadow">
                    <h2 class="text-2xl font-bold text-gray-700 ">
                        {{$vacante->titulo}}        
                    </h2> 

                    <p class="block text-gray-700 font-normal my-2">
                        Categoría: <span class="font-bold"> {{$vacante->categoria->nombre}} </span> 
                    </p>
                    <p class="block text-gray-700 font-normal my-2">
                        Ubicación: <span class="font-bold"> {{$vacante->ubicacion->nombre}} </span> 
                    </p>
                    <p class="block text-gray-700 font-normal my-2">
                        Experiencia: <span class="font-bold"> {{$vacante->experiencia->nombre}} </span> 
                    </p>
                    <a 
                    class="bg-green-600 text-gray-100 mt-2 px-4 py-2 inline-block rounded font-bold text-sm"    
                    href=" {{ route('vacantes.show', ['vacante'=> $vacante->id]) }} ">Ver más detalles</a>
                </li>  
            @endforeach
        </ul>
    </div>

    @if ($vacantes == null)
        Aún no se han cargado vacantes en esta categoria
    @endif

@endsection