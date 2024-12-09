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
                <th>Favorito</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Fila para añadir una nueva canción -->
            <tr>
                <form action="/add" method="POST">
                    @csrf
                    <td>Nuevo</td>
                    <td>
                        <input type="text" name="title" class="form-control" placeholder="Título" required>
                    </td>
                    <td>
                        <input type="text" name="group" class="form-control" placeholder="Grupo" required>
                    </td>
                    <td>
                        <input type="text" name="style" class="form-control" placeholder="Estilo" required>
                    </td>
                    <td>
                        <input type="number" name="rating" class="form-control" min="1" max="10" placeholder="Rating" required>
                    </td>
                    <td>—</td> <!-- Sin checkbox para la fila de añadir -->
                    <td>
                        <button type="submit" class="btn btn-sm btn-success">Añadir</button>
                    </td>
                </form>
            </tr>

            <!-- Canciones existentes -->
            @foreach($songs as $song)
                <tr>
                    <td>{{ $song->id }}</td>
                    <td>{{ $song->title }}</td>
                    <td>{{ $song->group }}</td>
                    <td>{{ $song->style }}</td>
                    <td>{{ $song->rating }}</td>
                    <td>
                        <!-- Checkbox para marcar como favorito -->
                        <form action="{{ route('song.toggleFavorite', $song->id) }}" method="GET">
                            <input 
                                type="checkbox" 
                                class="form-check-input" 
                                onchange="this.form.submit()" 
                                {{ $song->is_favorite ? 'checked' : '' }}
                            >
                        </form>

                    </td>
                    <td>
                        <a href="/update/{{ $song->id }}" class="btn btn-sm btn-primary">Editar</a>
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
