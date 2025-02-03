@forelse($libros as $libro)
    <li>
        {{ $libro->title }} ({{ $libro->author->name }})  {{-- 🔹 Nombres correctos --}}
    </li>
@empty
    <li>No se encontraron libros</li>
@endforelse