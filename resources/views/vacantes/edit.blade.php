@extends('layouts.app')

@section('styles')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/css/medium-editor.min.css" integrity="sha512-zYqhQjtcNMt8/h4RJallhYRev/et7+k/HDyry20li5fWSJYSExP9O07Ung28MUuXDneIFg0f2/U3HJZWsTNAiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/basic.min.css" integrity="sha512-MeagJSJBgWB9n+Sggsr/vKMRFJWs+OUphiDV7TJiYu+TNQD9RtVJaPDYP8hA/PAjwRnkdvU+NsTncYTKlltgiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection

@section('navegacion')

    @include('ui.adminNav')
    
@endsection

@section('content')

    <h1 class="text-2xl text-center mt-10">Editar vacante</h1>

      {{-- {{ $experiencias }} --}}

      <form 
      action="{{route('vacantes.store')}}"
      method="POST" 
      class="max-w-lg mx-auto my-10"
      >
      @csrf
  
        <div class="mb-5">
            <label class="block text-gray-700 text-sm mb-2" for="titulo"> Titulo </label>
            <input id="titulo" type="text" class="p-3 bg-gray-100  rounded form-input  w-full @error('titulo') border-red-500 @enderror" name="titulo" value="{{ old('titulo') }}" autofocus>
            @error('titulo')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3  rounded relative mt-3 mb-6" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block "> {{$message}}</span>
                </div>
            @enderror
        </div>
        <div class="mb-5">
            <label class="block text-gray-700 text-sm mb-2" for="categoria"> Categoria:  </label>
            <select id="categoria" class="apperance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100 w-full @error('categoria') border-red-500 @enderror" name="categoria" value="{{ old('categoria') }}" >

                <option disabled selected> -- Selecciona -- </option>
                @foreach ($categorias as $categoria)
                    <option 
                    {{ old('categoria') == $categoria->id ? 'selected' : '' }}
                        value="{{ $categoria->id }}" > {{ $categoria->nombre }} 
                    </option>
                @endforeach
            </select>
            @error('categoria')
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3  rounded relative mt-3 mb-6" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block "> {{$message}}</span>
                </div>
            @enderror
        </div>
        <div class="mb-5">
            <label class="block text-gray-700 text-sm mb-2" for="experiencia"> Experiencia: </label>
            <select id="experiencia" class="apperance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100 w-full @error('experiencia') border-red-500 @enderror" name="experiencia" value="{{ old('experiencia') }}" >

                <option disabled selected> -- Selecciona -- </option>
                @foreach ($experiencias as $experiencia)
                    <option 
                    {{ old('experiencia') == $experiencia->id ? 'selected' : '' }}
                    value="{{ $experiencia->id }}" > {{ $experiencia->nombre }} </option>
                @endforeach
            </select>
            @error('experiencia')
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3  rounded relative mt-3 mb-6" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block "> {{$message}}</span>
                </div>
            @enderror
            
        </div>
        <div class="mb-5">
            <label class="block text-gray-700 text-sm mb-2" for="ubicacion"> Ubicación: </label>
            <select id="ubicacion" class="apperance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100 w-full @error('ubicacion') border-red-500 @enderror" name="ubicacion" value="{{ old('ubicacion') }}" >

                <option disabled selected> -- Selecciona -- </option>
                @foreach ($ubicacions as $ubicacion)
                    <option 
                    {{ old('ubicacion') == $ubicacion->id ? 'selected' : '' }}
                    value="{{ $ubicacion->id }}" > {{ $ubicacion->nombre }} </option>
                @endforeach
            </select>
            @error('ubicacion')
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3  rounded relative mt-3 mb-6" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block "> {{$message}}</span>
                </div>
            @enderror
        </div>
        <div class="mb-5">
            <label class="block text-gray-700 text-sm mb-2" for="salario"> Salario: </label>
            <select id="salario" class="apperance-none w-full border border-gray-200 text-gray-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500 p-3 bg-gray-100 w-full @error('salario') border-red-500 @enderror" name="salario" value="{{ old('salario') }}" >

                <option disabled selected> -- Selecciona -- </option>
                @foreach ($salarios as $salario)
                    <option 
                    {{ old('salario') == $salario->id ? 'selected' : '' }}
                    value="{{ $salario->id }}" > {{ $salario->nombre }} </option>
                @endforeach
            </select>
            @error('salario')
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3  rounded relative mt-3 mb-6" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block "> {{$message}}</span>
                </div>
            @enderror
        </div>
        <div  class="mb-5">
            <label class="block text-gray-700 text-sm mb-2" for="skills"> Habilidades y conocimientos: <span class="text-xs">(Elige al menos 3)</span> </label>
            @php
            $skills = ['HTML5', 'CSS3', 'CSSGrid', 'Flexbox', 'JavaScript', 'jQuery', 'Node', 'Angular', 'VueJS', 'ReactJS', 'React Hooks', 'Redux', 'Apollo', 'GraphQL', 'TypeScript', 'PHP', 'Laravel', 'Symfony', 'Python', 'Django', 'ORM', 'Sequelize', 'Mongoose', 'SQL', 'MVC', 'SASS', 'WordPress', 'Express', 'Deno', 'React Native', 'Flutter', 'MobX', 'C#', 'Ruby on Rails']
            @endphp
            {{-- <input type="hidden" name="skills" id="skills" value=""> --}}
                
            {{-- Componente VueJS --}}
                <habilidades-component 
                :skills="{{ json_encode($skills) }}"
                :oldskills="{{ json_encode( old('skills') ) }}"
                ></habilidades-component>
                @error('imagen')
                <div 
                
                class="bg-red-100 border border-red-400 text-red-700 px-4 py-3  rounded relative mt-3 mb-6" role="alert">
                        <strong class="font-bold">Error!</strong>
                        <span class="block "> {{$message}}</span>
                </div>
            @enderror            
        </div>
        
        {{-- MediumEditor --}}
        <div class="mb-5">
            <label class="block text-gray-700 text-sm mb-2" for="descripcion"> Descripción del puesto: </label>

            <div class="editable p-3 bg-gray-100 rounded form-input w-full text-gray-700" ></div>
            <input type="hidden" name="descripcion" id="descripcion" value="{{ old('descripcion') }}">
            @error('descripcion')
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3  rounded relative mt-3 mb-6" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block "> {{$message}}</span>
                </div>
            @enderror

            
            
        </div>

        {{-- Dropzone --}}
        <div class="mb-5">
            <label class="block text-gray-700 text-sm mb-2" for="imagen"> Imagen vacante: </label>

            <div class="dropzone rounded bg-gray-100 agrandar" id="dropzoneDevJobs"></div>

            <input type="hidden" id="imagen" name="imagen" value="{{ old('imagen') }}">
                <p id="error">  </p>
        </div>
        
        @error('imagen')
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3  rounded relative mt-3 mb-6" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block "> {{$message}}</span>
            </div>
        @enderror
        
        
        {{-- Button to save vacante --}}
        <div class="flex flex-wrap">
                <button 
                    type="submit" 
                    class="bg-gray-500 w-full hover:bg-gray-700 text-gray-100 p-3 focus:outline-none focus:shadow-outline uppercase">
                    Publicar vacante
                </button>
        </div>        
        </form>


@endsection

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/medium-editor/5.23.3/js/medium-editor.min.js" integrity="sha512-5D/0tAVbq1D3ZAzbxOnvpLt7Jl/n8m/YGASscHTNYsBvTcJnrYNiDIJm6We0RPJCpFJWowOPNz9ZJx7Ei+yFiA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js" integrity="sha512-VQQXLthlZQO00P+uEu4mJ4G4OAgqTtKG1hri56kQY1DtdLeIqhKUp9W/lllDDu3uN3SnUNawpW7lBda8+dSi7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        

        Dropzone.autoDiscover = false;

        document.addEventListener('DOMContentLoaded', () => {

            //Editor ó MediumEditor.js
             const editor = new MediumEditor('.editable' , {
                 toolbar : {
                     buttons : ['bold', 'italic', 'underline', 'quote', 'anchor', 'justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull', 'orderList', 'unorderedList', 'h2', 'h1', 'h3'],
                     static: true,
                     sticky: true
                 },
                 placeholder: {
                     text: 'Información de la vacante'
                 }
             });


            //Agrega al input hidden lo que el usuario escribe en medium editor 
            editor.subscribe('editableInput', function (eventObj, editable) {
            const contenido = editor.getContent();
            // console.log(contenido);
            document.querySelector('#descripcion').value = contenido;
 
        });

        //LLena el editor con el contenido del input hidden
        editor.setContent( document.querySelector('#descripcion').value  );
        
        //Dropzone
        const dropZoneDevJobs = new Dropzone('#dropzoneDevJobs', {
            url: "http://localhost/developerJobs/public/vacantes/imagen",
            dictDefaultMessage: 'Sube tu archivo',
            acceptedFiles: '.png,.jpg,.jpeg',
            addRemoveLinks: true,
            dicRemoveFile: 'Borrar archivo',
            maxFiles: 1,
            headers: {
                'X-CSRF-TOKEN' : document.querySelector('meta[name=csrf-token]').content
            },
            init: function() {
                if( document.querySelector('#imagen').value.trim() ){
                    // console.log('Si, tenemos algo aqui');

                    let imagenPublicada = {};
                    imagenPublicada.size = 1234;
                    imagenPublicada.name =  document.querySelector('#imagen').value;

                    this.options.addedfile.call(this, imagenPublicada);
                    this.options.thumbnail.call(this, imagenPublicada, `../storage/vacantes/${imagenPublicada.name}`);

                    imagenPublicada.previewElement.classList.add('dz-sucess');
                    imagenPublicada.previewElement.classList.add('dz-complete');

                }else{
                    console.log('No se ha cargado una imagen previamente');
                }
            },
            success: function(file, response){
                console.log('Respuesta del servidor (carga imagen): ', response.correcto);
                document.querySelector('#error').textContent = '';


                //Coloca la respuesta del servidor en el inputHidden
                document.querySelector('#imagen').value = response.correcto;

                //Añadir al objeto del archivo el nombre del servidor
                file.nombreServidor = response.correcto;
            },
            /*error: function(file, response){
                console.log(response);
                // console.log(file);
                document.querySelector('#error').textContent = 'Formato no valido';
            },*/
            maxfilesexceeded: function(file){
                // console.log('No puedes subir mas de 1 archivo');
                if( this.files[1] != null){
                    this.removeFile(this.files[0]);  // Eliminar el archivo anterior

                    this.addFile(file); //Agregar el nuevo archivo
                }
            },
            removedfile: function(file, response){

                file.previewElement.parentNode.removeChild(file.previewElement);

                // console.log(file);
                // console.log('El archivo borrado fue', file);
                
                params = {
                    imagen: file.nombreServidor ?? document.querySelector('#imagen').value
                }
                
                axios.post('../vacantes/borrarimagen', params )
                .then(
                    response => console.log("Respuesta del servidor borrar imagen: ", response)
                    
                    );
            }
        });
        });

    </script>
@endsection