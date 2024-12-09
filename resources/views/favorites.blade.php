@extends('layouts.layout')

@section('content')
    <h2>Mis Canciones Favoritas</h2>

    @if($favorites->isEmpty())
        <p>No tienes canciones marcadas como favoritas.</p>
    @else
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
                @foreach($favorites as $favorite)
                    <tr>
                        <td>{{ $favorite->id }}</td>
                        <td>{{ $favorite->title }}</td>
                        <td>{{ $favorite->group }}</td>
                        <td>{{ $favorite->style }}</td>
                        <td>{{ $favorite->rating }}</td>
                        <td>
                            <a href="{{ route('song.toggleFavorite', ['id' => $favorite->id]) }}" class="btn btn-sm btn-warning">
                                Quitar de Favoritos
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
