@extends('layouts.app')

@section('styles')
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
@endsection

@section('navegacion')

    @include('ui.categoriasNav')
    
@endsection

@section('content')

    <h1 class="text-3xl text-center mt-10 "> {{ $vacante->titulo }}  </h1>

    <div class="mt-10 mb-20 md:flex items-start">
        <div class="md:w-3/5">
            <p class="text-gray-700 font-bold my-2 ">
                Por: <span class="font-normal"> {{$vacante->reclutador->name}} </span>
            </p>
            <p class="text-gray-700 font-bold my-2 ">
                Publicado: <span class="font-normal"> {{$vacante->created_at->diffForHumans()}} </span>
            </p>
            <p class="text-gray-700 font-bold my-2 ">
                Categoria: <span class="font-normal"> {{$vacante->categoria->nombre}} </span>
            </p>
            <p class="text-gray-700 font-bold my-2 ">
                Salario: <span class="font-normal"> {{$vacante->salario->nombre}} </span>
            </p>
            <p class="text-gray-700 font-bold my-2 ">
                Ubicación: <span class="font-normal"> {{$vacante->ubicacion->nombre}} </span>
            </p>
            <p class="text-gray-700 font-bold my-2 ">
                Experiencia: <span class="font-normal"> {{$vacante->experiencia->nombre}} </span>
            </p>

            <h2 class="text-2xl text-center mt-10 text-gray-700 mb-4"> Conocimientos y Tecnologías </h2>

                @php

                    $arraySkills = explode(',', $vacante->skills )
                    
                @endphp

                @foreach ($arraySkills as $skill)
                    <p class="inline-block border border-gray-500 py-2 px-8 text-gray-700 my-2 rounded">
                         {{ $skill }} 
                    </p>                
                @endforeach
                    <a href="../storage/vacantes/{{$vacante->imagen}}" data-lightbox="image-1" data-title="My caption">
                        <img src="../storage/vacantes/{{$vacante->imagen}}" class="w-40 mt-10">
                    </a>

                <div class="descripcion mt-10 mb-5">
                    <h2 class="text-2xl text-center mt-10 text-gray-700 mb-4"> Descripción general: </h2>
                    
                    <p> {!! $vacante->descripcion !!}</p>
                </div>
        </div>
        @include('ui.contacto')
    </div>

@endsection
