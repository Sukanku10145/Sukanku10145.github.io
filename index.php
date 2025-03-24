<?php include 'access.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="bg-pink text-white text-center py-3">
        <h1>Bienvenida, mi amor 💖</h1>
    </header>
    <div class="container mt-5 text-center">
        <p class="lead">Un espacio especial para nuestra historia de amor.</p>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="historia.php">Nuestra Historia</a></li>
                        <li class="nav-item"><a class="nav-link" href="galeria.php">Galería</a></li>
                        <li class="nav-item"><a class="nav-link" href="anecdotas.php">Anécdotas</a></li>
                        <li class="nav-item"><a class="nav-link" href="extras.php">Extras</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="nav.js"></script>
</body>
</html>
