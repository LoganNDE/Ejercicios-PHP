@extends('partials/header')
@section('titulo', 'BiblioCompra | Inicio')

@section('contenido')
<section class="my-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <h2 class="font-manrope font-bold text-4xl text-black mb-8 max-lg:text-center">
            Lo mas vendido
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($libros as $libro)    
            <div class="relative mx-auto sm:mr-0 group cursor-pointer lg:mx-auto bg-white transition-all duration-500">
                <a href="{{ route('libros.show', $libro->id) }}">
                    <div>
                        <img src="{{ $libro['portada'] }}" alt="{{ $libro['title'] }}"
                             class="w-full aspect-square rounded-2xl object-cover">
                    </div>
                    <div class="mt-5">
                        <div class="flex items-center justify-between">
                            <h6 class="font-semibold text-xl leading-8 text-black transition-all duration-500 group-hover:text-indigo-600">
                                {{ $libro['title'] }}
                            </h6>
                            <h6 class="font-semibold text-xl leading-8 text-indigo-600">{{ $libro['price'] }}€</h6>
                        </div>
                        <p class="mt-2 font-normal text-sm leading-6 text-gray-500">{{ $libro['autor'] }}</p>
                    </div>
                </a>
                <div class="absolute top-[14px] left-[10px]">
                    <a class="text-white font-bold bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                       href="{{ route('libros.edit', $libro->id ) }}">
                        Editar
                    </a>
                </div>

                <div class="absolute top-[10px] left-[82px]">
                    <form action="{{ route('libros.destroy', $libro->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Estas seguro que deseas eliminar este libro')" class="text-white font-bold bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            Eliminar
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
