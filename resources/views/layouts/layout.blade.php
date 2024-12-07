<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Canciones</title>
    <!-- Enlace a Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-primary text-white py-4 text-center">
        <h1>Gestor de Canciones</h1>
        <p>Gestiona tu música favorita con estilo</p>
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
        <aside class="bg-dark text-white p-3">
            <nav>
                <ul class="list-unstyled">
                    <li class="mb-3"><a href="/home" class="text-white text-decoration-none"><i class="fas fa-home"></i> Inicio</a></li>
                    <li class="mb-3"><a href="/contact" class="text-white text-decoration-none"><i class="fas fa-envelope"></i> Contacto</a></li>
                    <li class="mb-3"><a href="/add" class="text-white text-decoration-none"><i class="fas fa-plus"></i> Añadir Canción</a></li>
                    <li><a href="/update" class="text-white text-decoration-none"><i class="fas fa-edit"></i> Actualizar Canción</a></li>
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
