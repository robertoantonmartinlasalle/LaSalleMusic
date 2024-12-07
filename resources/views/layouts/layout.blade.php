<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Canciones</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Enlace a un archivo CSS, opcional -->
</head>
<body>
    <header style="background-color: #f8f9fa; padding: 1rem; text-align: center;">
        <h1>Gestor de Canciones</h1>
    </header>
    <!-- Mensajes de éxito y error -->
    <div style="padding: 1rem;">
        @if (session('success'))
            <div style="background-color: #d4edda; color: #155724; padding: 0.5rem; border-radius: 5px; margin-bottom: 1rem; border: 1px solid #c3e6cb;">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div style="background-color: #f8d7da; color: #721c24; padding: 0.5rem; border-radius: 5px; margin-bottom: 1rem; border: 1px solid #f5c6cb;">
                <ul style="list-style-type: none; margin: 0; padding: 0;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div style="display: flex;">
        <!-- Menú lateral -->
        <aside style="width: 20%; background-color: #343a40; color: white; padding: 1rem;">
            <nav>
                <ul style="list-style-type: none; padding: 0;">
                    <li><a href="/home" style="color: white; text-decoration: none;">Inicio</a></li>
                    <li><a href="/contact" style="color: white; text-decoration: none;">Contacto</a></li>
                    <li><a href="/add" style="color: white; text-decoration: none;">Añadir Canción</a></li>
                    <li><a href="/update" style="color: white; text-decoration: none;">Actualizar Canción</a></li>
                </ul>
            </nav>
        </aside>
        <!-- Contenido principal -->
        <main style="width: 80%; padding: 1rem;">
            @yield('content') <!-- Aquí se insertará el contenido dinámico de cada vista -->
        </main>
    </div>
    <footer style="background-color: #f8f9fa; padding: 1rem; text-align: center; margin-top: 1rem;">
        <p>&copy; 2024 Gestor de Canciones</p>
    </footer>
</body>
</html>
