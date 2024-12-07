@extends('layouts.layout')

@section('content')
    <h2>Bienvenido a la página principal</h2>
    <p>Aquí puedes gestionar tus canciones.</p>

    @if(session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 1rem; margin-bottom: 1rem; border-radius: 5px;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Formulario para filtrar canciones por estilo -->
    <form method="GET" action="{{ url('/home') }}" style="margin-bottom: 1rem;">
        <label for="styles">Filtrar por estilo:</label>
        <div>
            @foreach($styles as $style)
                <div style="display: inline-block; margin-right: 10px;">
                    <input 
                        type="checkbox" 
                        name="styles[]" 
                        id="style-{{ $style }}" 
                        value="{{ $style }}" 
                        {{ request('styles') && in_array($style, request('styles')) ? 'checked' : '' }}
                    >
                    <label for="style-{{ $style }}">{{ $style }}</label>
                </div>
            @endforeach
        </div>
        <button type="submit" style="padding: 0.5rem; background-color: #007bff; color: white; border: none; border-radius: 5px; margin-top: 1rem;">
            Filtrar
        </button>
    </form>

    <h3>Lista de Canciones</h3>
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px;">ID</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Título</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Grupo</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Estilo</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Rating</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($songs as $song)
                <tr>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $song->id }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $song->title }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $song->group }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $song->style }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">{{ $song->rating }}</td>
                    <td style="border: 1px solid #ddd; padding: 8px;">
                        <a href="/update?id={{ $song->id }}" style="text-decoration: none; color: blue;">Editar</a>
                        <form action="/delete" method="POST" style="display: inline;">
                            @csrf
                            <input type="hidden" name="id" value="{{ $song->id }}">
                            <button type="submit" style="background-color: red; color: white; border: none; padding: 5px; cursor: pointer;">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Enlaces de paginación -->
    <div class="d-flex justify-content-center mt-4">
        {{ $songs->appends(['styles' => request('styles')])->links('pagination::bootstrap-5') }}
    </div>
@endsection
