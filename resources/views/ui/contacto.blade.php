<aside class="md:w-2/5 bg-green-500 p-5 rounded m-3">
    <h2 class="text-2xl my-5 text-white  uppercase fnd-bold text-center">Contacta al reclutador</h2>

    <form action="{{route('candidatos.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-4 ">
            <label class="block text-white text-sm font-bold  mb-4" for="nombre">Nombre:</label>
            <input id="nombre" name="nombre" class="p-3 bg-gray-100 rounded w-full @error('nombre') border border-red-500  @enderror"  placeholder="Escribe aqui tu nombre completo"  type="text" value="{{old('nombre')}}">
            @error('nombre')
                <div class="bg-red-100 border-l-4 border-reed-500 text-red-700 p-4 w-full m-5" role="alert">
                    <p> {{ $message }} </p>
                </div>
            @enderror

        </div>
        <div class="mb-4 ">
            <label class="block text-white text-sm font-bold  mb-4" for="nombre">Email:</label>
            <input id="email" name="email" class="p-3 bg-gray-100 rounded w-full @error('email') border border-red-500  @enderror"  placeholder="Escribe aqui tu email"  type="email" value="{{old('email')}}">
            @error('email')
                <div class="bg-red-100 border-l-4 border-reed-500 text-red-700 p-4 w-full m-5" role="alert">
                    <p> {{ $message }} </p>
                </div>
            @enderror

        </div>
        <div class="mb-4 ">
            <label class="block text-white text-sm font-bold  mb-4" for="nombre">Tu Curriculum (PDF):</label>
            <input id="cv" name="cv" class="p-3 rounded w-full @error('cv') border border-red-500  @enderror" type="file" value="{{old('cv')}}" >
            @error('cv')
                <div class="bg-red-100 border-l-4 border-reed-500 text-red-700 p-4 w-full m-5" role="alert">
                    <p> {{ $message }} </p>
                </div>
            @enderror

        </div>
        <input type="hidden" name="vacante_id" value="{{ $vacante->id }}">
        <input type="submit" value="Contacter"
        class="bg-green-600 w-full hover:bg-green-700 text-gray-100 focus:outline-none focus:shadow-outline uppercase p-3" >
    </form>
</aside>