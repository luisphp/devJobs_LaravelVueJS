@extends('layouts.app')

@section('navegacion')
    {{-- @include('ui.adminnav') --}}
    @include('ui.categoriasNav')
@endsection

@section('content')
    {{-- <h1 class="text-2xl text-center mt-10 "> Página de inicio </h1> --}}

    <div class="flex flex-col lg:flex-row shadow bg-white ">
        <div class="lg:w-1/2 px-8 lg:px-12 py-12 lg:py-24">
            <p class="text-3xl text-gray-700"> dev<span class="font-bold">Jobs</span> </p>
            <h1 class="mt-4 text-4xl font-bold text-gray-500 leading-tight">
                Find a remote job or in your country 
                <span class="text-1xl text-green-500"> for Developers & Designers!  </span>
            </h1>

            @include('ui.buscar')
        </div>
        <div class="block lg:w-1/2">
            <img class="inset-0 h-full w-full object-cover " src="{{ asset('img/dev_jobs_main.jpg') }}" alt="dev_jobs_main">

        </div>

    </div>

    <div class="my-10 bg-gray-100 p-10 shadow">
        <h1 class="text-3xl text-gray-700 m-0">
            Nuevas <span class="font-bold">Vacantes</span>
        </h1>

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
@endsection