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
    <div style="display: flex; flex-direction: column; min-height: 100vh;">
        <!-- Encabezado -->
        <header class="bg-primary text-white py-4 text-center">
            <h1>Gestor de Canciones</h1>
            <p>Gestiona tu música favorita con estilo</p>
        </header>

        <!-- Contenedor principal -->
        <div style="flex: 1; display: flex;">
            <!-- Menú lateral -->
            <aside class="bg-dark text-white p-3">
                <nav>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a href="/home" class="text-white text-decoration-none"><i class="fas fa-home"></i> Inicio</a></li>
                        <li class="mb-3"><a href="/contact" class="text-white text-decoration-none"><i class="fas fa-envelope"></i> Contacto</a></li>
                        <li class="mb-3"><a href="/add" class="text-white text-decoration-none"><i class="fas fa-plus"></i> Añadir Canción</a></li>
                        <li class="mb-3"><a href="/favorites" class="text-white text-decoration-none"><i class="fas fa-star"></i> Favoritos</a></li>
                        <li><a href="/update" class="text-white text-decoration-none"><i class="fas fa-edit"></i> Actualizar Canción</a></li>
                    </ul>
                </nav>
            </aside>

            <!-- Contenido dinámico -->
            <main style="width: 80%; padding: 1rem;">
                @yield('content') <!-- Aquí se insertará el contenido dinámico de cada vista -->
            </main>
        </div>

        <!-- Pie de página -->
        <footer style="background-color: #f8f9fa; padding: 1rem; text-align: center; margin-top: auto;">
            <p>&copy; 2024 Gestor de Canciones</p>
        </footer>
    </div>
</body>

</html>
