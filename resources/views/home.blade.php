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
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <h5 class="card-title">Filtrar por estilo</h5>
            <form method="GET" action="{{ url('/home') }}">
                <div class="row">
                    @foreach($styles as $style)
                        <div class="col-12 col-md-4">
                            <div class="form-check">
                                <input 
                                    class="form-check-input" 
                                    type="checkbox" 
                                    name="styles[]" 
                                    id="style-{{ $style }}" 
                                    value="{{ $style }}" 
                                    {{ request('styles') && in_array($style, request('styles')) ? 'checked' : '' }}
                                >
                                <label class="form-check-label" for="style-{{ $style }}">
                                    {{ $style }}
                                </label>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary mt-3">Filtrar</button>
            </form>
        </div>
    </div>



    <h3>Lista de Canciones</h3>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Grupo</th>
                <th>Estilo</th>
                <th>Rating</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($songs as $song)
                <tr>
                    <td>{{ $song->id }}</td>
                    <td>{{ $song->title }}</td>
                    <td>{{ $song->group }}</td>
                    <td>{{ $song->style }}</td>
                    <td>{{ $song->rating }}</td>
                    <td>
                        <a href="/update?id={{ $song->id }}" class="btn btn-sm btn-primary">Editar</a>
                        <form action="/delete" method="POST" class="d-inline">
                            @csrf
                            <input type="hidden" name="id" value="{{ $song->id }}">
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
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
