<form class="mt-5" action={{route('vacantes.buscar')}} method="POST">
    @method('POST')
    @csrf
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
    <div class="flex flex-wrap">
        <button 
            type="submit" 
            class="bg-green-500 w-full hover:bg-green-700 text-gray-100 p-3 focus:outline-none focus:shadow-outline rounded uppercase">
            Buscar
        </button>
    </div>   

</form>